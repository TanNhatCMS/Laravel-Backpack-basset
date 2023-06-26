<?php

return [
    // development mode, assets will not be internalized
    'dev_mode' => env('BASSET_DEV_MODE', env('APP_ENV') === 'local'),

    // disk and path where to store bassets
    'disk' => 'public',
    'path' => 'basset',

    // use cache map file (.basset)
    'cache_map' => true,

    // view paths that may use @basset
    // used to internalize assets in advance with artisan basset:internalize
    'view_paths' => [
        resource_path('views'),
    ],

    // content security policy nonce
    'nonce' => null,
];
