<?php
################# Development #################
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
define('REQUEST_MICROTIME', microtime(true));
###############################################

chdir(dirname(__DIR__));
require(getcwd() .'/vendor/autoload.php');
Zend\Mvc\Application::init(require(getcwd() .'/config/application.config.php'))->run();
