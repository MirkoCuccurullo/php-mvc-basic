<?php
require __DIR__ . '/../vendor/autoload.php';
use Routers\PatternRouter;

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = new PatternRouter();
$router->route($uri);