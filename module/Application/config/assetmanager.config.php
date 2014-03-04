<?php
return [
    'resolver_configs' => [
        'collections' => [
            'asset/css/prx.css' => [
                'asset/css/bootstrap.css',
                'asset/css/application.css',
            ],
        ],

        'map' => [
            // CSS
            'asset/css/application.css' => __DIR__ .'/../asset/less/application.less',
            'asset/css/bootstrap.css'   => __DIR__ .'/../asset/less/bootstrap.less',
        ],
    ],
];
