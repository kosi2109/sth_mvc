<?php
require "./vendor/autoload.php";
require "./config.php";
require_once "./helpers.php";
require_once "./routes/routers.php";
use app\App;

$app = new App($config);
$app->boot();
