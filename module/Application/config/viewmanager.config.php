<?php
return [
    'doctype'               => 'HTML5',
    'not_found_template'    => 'error/404',
    'exception_template'    => 'error/500',
    'layout'                => 'layout/default',
    'template_map' => [
        // Application templates
        'application/home/index'    => __DIR__ .'/../view/application/home/index.phtml',

        // Error
        'error/404'                 => __DIR__ .'/../view/error/404.phtml',
        'error/500'                 => __DIR__ .'/../view/error/500.phtml',
        'error/partial/controller'  => __DIR__ .'/../view/error/partial/controller.phtml',
        'error/partial/exception'   => __DIR__ .'/../view/error/partial/exception.phtml',
        'error/partial/not-found'   => __DIR__ .'/../view/error/partial/not-found.phtml',

        // Layout
        'layout/default'            => __DIR__ .'/../view/layout/default.phtml',
    ],
];
