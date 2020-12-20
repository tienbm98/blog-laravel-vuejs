<?php

return [

    // Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

    // Super Admin
    'super_admin' => env('APP_SUPER_ADMIN') ?: 1,

    // Admin Credentials
    'admin_name' => env('ADMIN_NAME') ?: 'admin',
    'admin_email' => env('ADMIN_EMAIL') ?: 'admin@hotnews.com',
    'admin_password' => env('ADMIN_PASSWORD') ?: 'admin',

    // Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    // Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    // Color Theme
    'color_theme' => 'gray-theme',

    // Meta
    'meta' => [
        'keywords' => 'hot, news, tienbm98, laravel,vuejs',
        'description' => 'All hot news around the world!'
    ],

    // Article Page
    'article' => [
        'title'       => 'Hot News',
        'description' => 'All hot news around the world!',
        'number'      => 10,
        'sort'        => 'desc',
        'sortColumn'  => 'published_at',
    ],

    // Discussion Page
    'discussion' => [
        'number' => 15,
        'sort'   => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Footer
    'footer' => [
        'github' => [
            'open' => true,
            'url'  => 'https://github.com/tienbm98',
        ],
        'meta' => '© Hot News 2020. Powered By Manh Tien',
    ],

    'license' => 'Powered By Manh Tien',

];
