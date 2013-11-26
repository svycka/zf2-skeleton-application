<?php
return [
    'resolver_configs' => [
        'collections' => [
            // No collections yet
        ],

        'map' => [
            // CSS
            'asset/css/application.css' => __DIR__ .'/../asset/less/application.less',
            'asset/css/bootstrap.css'   => __DIR__ .'/../asset/less/bootstrap.less',

            // JS
            'asset/js/bootstrap.js'     => getcwd() .'/vendor/twitter/bootstrap/dist/js/bootstrap.js',
            'asset/js/html5shiv.js'     => getcwd() .'/vendor/html5shiv/html5shiv/html5shiv.js',
            'asset/js/jquery.js'        => getcwd() .'/vendor/jquery/jquery/jquery-1.10.2.js',
        ],
    ],
];