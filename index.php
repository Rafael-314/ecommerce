<?php
session_start();

require_once("vendor/autoload.php");
require_once("functions.php");

use \Slim\Slim;


$app = new \Slim\Slim();

$app->config('debug', true);

require_once('site.php');
require_once('admin.php');
require_once('admin-users.php');
require_once('admin-products.php');
require_once('admin-categories.php');

$app->run();

 ?>