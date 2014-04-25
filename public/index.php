<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
require(getcwd() .'/vendor/autoload.php');
$config = require(getcwd() .'/config/application.config.php');

// Development mode
if ($_SERVER['APP_ENV'] === 'dev' && file_exists(getcwd() .'/config/development.config.php')) {
    define('REQUEST_MICROTIME', microtime(true));
    $config = Zend\Stdlib\ArrayUtils::merge($config, require(getcwd() .'/config/development.config.php'));
}
// Run the application!
Zend\Mvc\Application::init($config)->run();
