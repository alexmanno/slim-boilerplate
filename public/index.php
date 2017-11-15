<?php

$container = require __DIR__ . '/../bootstrap/app.php';
$app = new \Slim\App($container);

$routes = scandir(__DIR__ . '/../app/Routes/');
foreach ($routes as $route) {
    if (is_file(__DIR__ . '/../app/Routes/' . $route) && pathinfo(__DIR__ . '/../app/Routes/' . $route, PATHINFO_EXTENSION)['extension'] === 'php')) {
        require __DIR__ . '/../app/Routes/' . $route;
    }
}

$app->run();
