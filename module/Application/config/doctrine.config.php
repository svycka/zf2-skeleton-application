<?php
return [
    'driver' => [
        'Application\Entity' => [
            'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
            'paths' => [
                __DIR__ . '/../src/Application/Entity'
            ],
        ],

        'orm_default' => [
            'drivers' => [
                'Application\Entity' => 'Application\Entity',
            ],
        ],
    ],
];