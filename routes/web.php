<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Contact form submission
Route::post('/api/contact', function (Request $request) {
    \Log::info('Contact form submission received', ['request' => $request->all()]);
    
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:50',
        'message' => 'required|string',
    ]);

    \Log::info('Contact form validated', ['data' => $validated]);

    // Keep our own copy first, so a submission survives even if email delivery fails
    // (Brevo accepting a message does not mean it reached the inbox).
    try {
        file_put_contents(
            storage_path('app/contact-submissions.jsonl'),
            json_encode(['received_at' => now()->toIso8601String()] + $validated, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n",
            FILE_APPEND | LOCK_EX
        );
    } catch (\Throwable $e) {
        \Log::error('Failed to store contact submission: ' . $e->getMessage());
    }

    // Send email
    $mailStatus = 'sent (accepted by mail server)';
    try {
        Mail::raw(
            "Name: {$validated['name']}\n\nEmail: {$validated['email']}\n\nPhone: " . ($validated['phone'] ?? 'N/A') . "\n\nMessage: {$validated['message']}",
            function ($message) use ($validated) {
                $message->to('info@verbeek.ug');
                $message->subject('Contact Form Submission from ' . $validated['name']);
                $message->replyTo($validated['email'], $validated['name']);
            }
        );
        \Log::info('Contact email sent successfully');
    } catch (\Exception $e) {
        $mailStatus = 'FAILED: ' . $e->getMessage();
        \Log::error('Failed to send contact email: ' . $e->getMessage());
    }

    // Always notify via Telegram, whether or not the email went out (and whatever happens to it later)
    $token = config('services.telegram.bot_token');
    $chatId = config('services.telegram.chat_id');
    if ($token && $chatId) {
        try {
            $text = "New contact form message on verbeek.ug\n\n"
                . "Name: {$validated['name']}\n"
                . "Email: {$validated['email']}\n"
                . "Phone: " . ($validated['phone'] ?? 'N/A') . "\n"
                . "Email delivery: {$mailStatus}\n\n"
                . $validated['message'];

            // Telegram allows 4096 characters per message; send longer ones in parts
            foreach (mb_str_split($text, 4000) as $part) {
                \Illuminate\Support\Facades\Http::timeout(10)
                    ->post("https://api.telegram.org/bot{$token}/sendMessage", [
                        'chat_id' => $chatId,
                        'text' => $part,
                        'disable_web_page_preview' => true,
                    ])
                    ->throw();
            }
        } catch (\Throwable $e) {
            // Never log the exception message here: it can contain the bot token in the URL
            \Log::error('Failed to send Telegram notification: ' . class_basename($e));
        }
    } else {
        \Log::warning('Telegram notification skipped: TELEGRAM_BOT_TOKEN / TELEGRAM_CHAT_ID not set');
    }

    return response()->json(['message' => 'Thank you! We will get back to you within 24 hours.']);
});

// Sitemap, generated from App\Support\Seo so it stays in sync with the pages
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap', ['urls' => \App\Support\Seo::sitemap()])->header('Content-Type', 'application/xml');
});

// Catch all routes for Vue SPA
Route::get('/{any?}', function (Request $request, ?string $any = null) {
    $seo = \App\Support\Seo::forPath($any ?? '');

    return response()->view('welcome', ['seo' => $seo], $seo['status']);
})->where('any', '.*');
