<?php
// Copy this file to config.php and set your configuration values.

return [
    'db' => [
        'host' => 'localhost',
        'user' => 'booking_user',
        'pass' => 'secret',
        'name' => 'booking_db'
    ],
    'google' => [
        'client_id' => 'YOUR_GOOGLE_CLIENT_ID',
        'client_secret' => 'YOUR_GOOGLE_CLIENT_SECRET',
        'redirect_uri' => 'https://booking.chewaclub.com/booking-system/oauth2callback.php',
        'allowed_domain' => 'chewathai.com'
    ],
    'resend' => [
        'api_key' => 're_PEdmJoS8_6iAUWYR6L8PdDnWnqbsx8c3u',
        'from_email' => 'it@chewameetingroom.com'
    ]
];
