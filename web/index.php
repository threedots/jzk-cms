<?php

defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'prod'));

define('WEB_PATH', __DIR__);
define('APP_PATH', realpath(__DIR__ . '/../'));

if (APPLICATION_ENV == 'dev') {
    require '_app_dev.php';
} else {
    require '_app.php';
}