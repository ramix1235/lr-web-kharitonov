<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_INDEX_FILE', 'index.php' . '/');

define('URL', URL_PROTOCOL . URL_DOMAIN . '/');
define('URL_WITH_INDEX_FILE', URL_PROTOCOL . URL_DOMAIN . '/' . URL_INDEX_FILE);

define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'tiny');
define('DB_USER', 'root');
define('DB_PASS', '');
