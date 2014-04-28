<?php
return [
    'resolver_configs' => [
        'collections' => [
            'asset/css/application.css' => [
                'asset/css/bootstrap.css',
                'asset/css/base.css',
                'asset/css/theme.css',
            ],

            'asset/js/application.js' => [
                'asset/js/bootstrap.js',
                'asset/js/base.js',
            ],
        ],

        'map' => [
            // CSS
            'asset/css/base.css'        => __DIR__ .'/../asset/less/base.less',
            'asset/css/bootstrap.css'   => __DIR__ .'/../asset/less/bootstrap.less',
            'asset/css/theme.css'        => __DIR__ .'/../../../vendor/twitter/bootstrap/less/theme.less',

            // JS
            'asset/js/bootstrap.js'     =>__DIR__ . '/../../../vendor/twitter/bootstrap/dist/js/bootstrap.js',
            'asset/js/base.js'          => __DIR__ .'/../asset/js/base.js',
        ],
    ],
];
