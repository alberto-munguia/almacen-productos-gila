<?php
require __DIR__ . '/../vendor/autoload.php';

session_start();

$settings = require __DIR__ . '/../config/settings.php';

$app = new \Slim\App($settings);

$dependencies = require __DIR__ . '/../config/container.php';
$dependencies($app);

$middleware = require __DIR__ . '/../src/middleware.php';
$middleware($app);

$routes = require __DIR__ . '/../src/routes.php';
$routes($app);

// Run app
$app->run();
