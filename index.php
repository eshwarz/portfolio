<?php
// constants defined here.
session_start();
// error_reporting(5);

// define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/fly/');
define ('SERVER_NAME', $_SERVER['SERVER_NAME']);
define ('ROOT', str_replace('\\', '/', dirname(realpath(__FILE__))) . '/');
define ('VIEW_PATH', dirname(realpath(__FILE__)) . '/app/views/');
define ('ASSET_PATH', dirname(realpath(__FILE__)) . '/app/assets/');
define ('CSS_PATH', 'http://' . SERVER_NAME . '/fly/app/assets/stylesheets/');
define ('JS_PATH', 'http://' . SERVER_NAME . '/fly/app/assets/javascripts/');
require_once 'config/fly.php';

debug();

$uri = $_SERVER['PATH_INFO'];
Registry::set('uri', $uri);

Router::dispatch();

?>