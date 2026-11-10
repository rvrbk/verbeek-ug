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

    // Send email
    try {
        Mail::raw(
            "Name: {$validated['name']}\n\nEmail: {$validated['email']}\n\nPhone: " . ($validated['phone'] ?? 'N/A') . "\n\nMessage: {$validated['message']}",
            function ($message) use ($validated) {
                $message->to('info@verbeek.ug');
                $message->subject('Contact Form Submission from verbeek.ug');
                $message->from($validated['email'], $validated['name']);
                $message->replyTo($validated['email'], $validated['name']);
            }
        );
        \Log::info('Contact email sent successfully');
    } catch (\Exception $e) {
        \Log::error('Failed to send contact email: ' . $e->getMessage());
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
