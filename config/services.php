<?php
return [
    'google' => [
        'client_id' => env("google_id"),
        'client_secret' => env("google_secret"),
        'redirect' => "http://localhost:8080/auth/callback/google",
    ],
    'github' => [
        'client_id' => env("github_id"),
        'client_secret' => env("github_secret"),
        'redirect' => "http://localhost:8080/auth/callback/github",
    ],
    'facebook' => [
        'client_id' => env("facebook_id"),
        'client_secret' => env("facebook_secret"),
        'redirect' => "http://localhost:8080/auth/callback/facebook",
    ],
    'tiktok' => [
        'client_id' => env("tiktok_id"),
        'client_secret' => env("tiktok_secret"),
        'redirect' => "http://localhost:8080/auth/callback/tiktok",
    ],
];
