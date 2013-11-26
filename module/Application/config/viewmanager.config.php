<?php
return [
    'doctype'               => 'HTML5',
    'not_found_template'    => 'error/404',
    'exception_template'    => 'error/index',
    'layout'                => 'layout/default',
    'template_map' => [
        'layout/default'          => __DIR__ .'/../view/layout/default.phtml',
        'error/404'               => __DIR__ .'/../view/error/404.phtml',
        'error/index'             => __DIR__ .'/../view/error/index.phtml',

        // Application templates
        'application/home/index'  => __DIR__ .'/../view/application/home/index.phtml',
    ],
];
