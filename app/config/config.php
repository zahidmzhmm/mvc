<?php
$root_url = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://" . $_SERVER['HTTP_HOST'];
define('APP_ROOT', dirname(__DIR__));
define('APP_NAME', 'MVC');
define('URL_ROOT', $root_url . '/mvc');
define('DB_TYPE', 'mysql');
define('DB_HOST', 'zahidmzhmm.com');
define('DB_USER', 'taskvers_zahid');
define('DB_PASS', 'm-zhm118899S');
define('DB_NAME', 'taskvers_mvc');
unset($root_url);
