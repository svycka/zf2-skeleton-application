<?php
return [
    'asset_manager'     => include(__DIR__ .'/assetmanager.config.php'),
    'controllers'       => include(__DIR__ .'/controllers.config.php'),
    'router'            => include(__DIR__ .'/router.config.php'),
    'spiffy_navigation' => include(__DIR__ .'/navigation.config.php'),
    'service_manager'   => include(__DIR__ .'/servicemanager.config.php'),
    'translator'        => include(__DIR__ .'/translator.config.php'),
    'view_manager'      => include(__DIR__ .'/viewmanager.config.php'),
];
