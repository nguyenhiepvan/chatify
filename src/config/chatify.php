<?php

return [
    /*
    |-------------------------------------
    | Messenger display name
    |-------------------------------------
    */
    'name'              => env('CHATIFY_NAME', 'Chatify Messenger'),

    /*
    |-------------------------------------
    | The disk on which to store added
    | files and derived images by default.
    |-------------------------------------
    */
    'storage_disk_name' => env('CHATIFY_STORAGE_DISK', 'public'),

    /*
    |-------------------------------------
    | Routes configurations
    |-------------------------------------
    */
    'use_route' =>[
        'web' => true,
        'api' => true,
    ],

    'routes'            => [
        'prefix'     => env('CHATIFY_ROUTES_PREFIX', 'chatify'),
        'middleware' => env('CHATIFY_ROUTES_MIDDLEWARE', ['web', 'auth']),
        'namespace'  => env('CHATIFY_ROUTES_NAMESPACE', 'Chatify\Http\Controllers'),
    ],

    'api_routes'        => [
        'prefix'     => env('CHATIFY_API_ROUTES_PREFIX', 'chatify/api'),
        'middleware' => env('CHATIFY_API_ROUTES_MIDDLEWARE', ['api']),
        'namespace'  => env('CHATIFY_API_ROUTES_NAMESPACE', 'Chatify\Http\Controllers\Api'),
    ],

    /*
    |-------------------------------------
    | Pusher API credentials
    |-------------------------------------
    */
    'pusher'            => [
        'host'    => env('PUSHER_HOST', "127.0.0.1"),
        'port'    => env('PUSHER_PORT', "6001"),
        'key'     => env('PUSHER_APP_KEY', "app-key"),
        'secret'  => env('PUSHER_APP_SECRET', "app-secret"),
        'app_id'  => env('PUSHER_APP_ID', "app-id"),
        'options' => [
            'host'      => env('PUSHER_HOST', "127.0.0.1"),
            'port'      => env('PUSHER_PORT', "6001"),
            'scheme'    => env('PUSHER_SCHEME', "http"),
            'useTLS'    => false,
            'cluster'   => env('PUSHER_APP_CLUSTER'),
            'encrypted' => false,
        ],
    ],

    /*
    |-------------------------------------
    | User Avatar
    |-------------------------------------
    */
    'user_avatar'       => [
        'folder'  => 'users-avatar',
        'default' => 'avatar.png',
    ],

    /*
    |-------------------------------------
    | Gravatar
    |
    | imageset property options:
    | [ 404 | mp | identicon (default) | monsterid | wavatar ]
    |-------------------------------------
    */
    'gravatar'          => [
        'enabled'    => false,
        'image_size' => 200,
        'imageset'   => 'identicon'
    ],

    /*
    |-------------------------------------
    | Attachments
    |-------------------------------------
    */
    'attachments'       => [
        'folder'              => 'attachments',
        'download_route_name' => 'attachments.download',
        'allowed_images'      => (array)['png', 'jpg', 'jpeg', 'gif'],
        'allowed_files'       => (array)['zip', 'rar', 'txt'],
        'max_upload_size'     => env('CHATIFY_MAX_FILE_SIZE', 150), // MB
    ],

    /*
    |-------------------------------------
    | Messenger's colors
    |-------------------------------------
    */
    'colors'            => [
        '#2180f3',
        '#2196F3',
        '#00BCD4',
        '#3F51B5',
        '#673AB7',
        '#4CAF50',
        '#FFC107',
        '#FF9800',
        '#ff2522',
        '#9C27B0',
    ],
];
