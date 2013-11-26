<?php
return [
    'routes' => [
        'home' => [
            'type' => 'Literal',
            'options' => [
                'route'    => '/',
                'defaults' => [
                    'controller' => 'Application\Controller\HomeController',
                    'action'     => 'index',
                ],
            ],
        ],
    ],
];
