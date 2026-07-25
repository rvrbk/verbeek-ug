<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Contact form submission
Route::post('/api/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:50',
        'service' => 'nullable|string|max:100',
        'message' => 'required|string',
    ]);

    // Send email
    Mail::raw(
        "Name: {$validated['name']}\n\nEmail: {$validated['email']}\n\nPhone: {$validated['phone']}\n\nService: {$validated['service']}\n\nMessage: {$validated['message']}",
        function ($message) use ($validated) {
            $message->to('rik@verbeek.ug');
            $message->subject('Contact Form Submission from verbeek.ug');
            $message->from($validated['email'], $validated['name']);
        }
    );

    return response()->json(['message' => 'Thank you! I will get back to you within 24 hours.']);
});

// Catch all routes for Vue SPA
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '.*');
