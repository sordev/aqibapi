<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('APP_URL').'/user/login/github',
    ],
    'facebook' => [
        'client_id' => env('FB_APP_ID'),
        'client_secret' => env('FB_APP_SECRET'),
        'redirect' => env('APP_URL').'/user/login/facebook',
    ],
    'twitter' => [
        'client_id' => env('TW_APP_KEY'),
        'client_secret' => env('TW_APP_SECRET'),
        'redirect' => env('APP_URL').'/user/login/twitter',
    ],
    'google' => [
        'client_id' => env('GP_APP_KEY'),
        'client_secret' => env('GP_APP_SECRET'),
        'redirect' => env('APP_URL').'/user/login/google',
    ],
];
