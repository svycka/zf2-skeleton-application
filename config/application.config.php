<?php
return [
    'modules' => [
        // Doctrine
        //'DoctrineModule',
        //'DoctrineORMModule',

        // Vendor modules
        'AssetManager',
        'SpiffyNavigation',

        // PRX Modules
        'PrxBootstrap',

        // Application
        'Application',
    ],

    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],

        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ],
    ],
];
