<?php
ini_set ( 'display_errors', 1 );

define ( 'DSN', 'mysql:dbhost=localhost;dbname=parknet_sns_php' );
define ( 'DB_USERNAME', 'root' );
define ( 'DB_PASSWORD', '' );

define ( 'SITE_URL', 'http://' . $_SERVER ['HTTP_HOST'] . '/sns_eclipce/' );

require_once (__DIR__ . '/../lib/functions.php');
require_once (__DIR__ . '/autoload.php');

session_start ();