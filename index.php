<?php
require_once 'vendor/autoload.php';
require_once 'app/autoload.php';//https://github.com/Nilpo/autoloader
require_once 'app/config/define.php';
require_once 'app/config/config.php';
require_once 'app/initialize.php';
require_once 'app/functions.php';
require_once 'app/routes.php';

Flight::start();