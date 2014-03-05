<?php
return [
    'modules' => [
        // Vendor modules
        'AssetManager',
        'SpiffyNavigation',

        // PRX Modules
        'PrxBootstrap',

        // Application
        'Application',
    ],

    'module_listener_options' => [
        'cache_dir'                 => getcwd() .'/data/cache/',
        'config_cache_enabled'      => true,
        'module_map_cache_enabled'  => true,

        'module_paths' => [
            './module',
        ],

        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ],
    ],
];
