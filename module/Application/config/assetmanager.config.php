<?php
return [
    'resolver_configs' => [
        'collections' => [
            'asset/css/application.css' => [
                'asset/css/bootstrap.css',
                'asset/css/base.css',
            ],

            'asset/js/prx.js' => [
                'asset/js/bootstrap.js',
            ],
        ],

        'map' => [
            // CSS
            'asset/css/base.css'        => __DIR__ .'/../asset/less/base.less',
            'asset/css/bootstrap.css'   => __DIR__ .'/../asset/less/bootstrap.less',
        ],
    ],
];
