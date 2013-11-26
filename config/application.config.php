<?php
return [
    'modules' => [
        // Doctrine
        'DoctrineModule',
        'DoctrineORMModule',

        // Vendor modules
        'AssetManager',
        'SpiffyNavigation',
        'ZendDeveloperTools',

        // Application
        'Application',
    ],

    'module_listener_options' => [
        #################### Production settings ####################
        //'config_cache_enabled'      => true,
        //'cache_dir'                 => getcwd() .'/data/cache/',
        //'module_map_cache_enabled'  => true,
        #############################################################

        'module_paths' => [
            './module',
            './vendor',
        ],

        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ],
    ],
];
