<?php

session_start();
include_once dirname(__FILE__) . '/../vendor/autoload.php';

# Application configuration
define('APP_DIR', dirname(__FILE__) . '/app/');

$autoloader = include dirname(__FILE__) . '/../vendor/autoload.php';;
$autoloader->addPsr4('Dframe\Database\tests\\', __DIR__);