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

            // Fonts
            'asset/font/glyphicons-halflings-regular.eot'   => getcwd() .'/vendor/twitter/bootstrap/fonts/glyphicons-halflings-regular.eot',
            'asset/font/glyphicons-halflings-regular.svg'   => getcwd() .'/vendor/twitter/bootstrap/fonts/glyphicons-halflings-regular.svg',
            'asset/font/glyphicons-halflings-regular.ttf'   => getcwd() .'/vendor/twitter/bootstrap/fonts/glyphicons-halflings-regular.ttf',
            'asset/font/glyphicons-halflings-regular.woff'  => getcwd() .'/vendor/twitter/bootstrap/fonts/glyphicons-halflings-regular.woff',

            // JS
            'asset/js/bootstrap.js'     => getcwd() .'/vendor/twitter/bootstrap/dist/js/bootstrap.js',
            'asset/js/html5shiv.js'     => getcwd() .'/vendor/html5shiv/html5shiv/html5shiv.js',
            'asset/js/jquery.js'        => getcwd() .'/vendor/jquery/jquery/jquery-1.10.2.js',
        ],
    ],
];
