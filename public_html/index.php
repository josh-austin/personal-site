<?php
require_once 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() {
    $page = 'home';
    require_once 'header.php';
    require_once 'partials/home.php';
});

$app->get('/projects', function() {
    $page = 'projects';
    require_once 'header.php';
    require_once 'partials/projects.php';
});

$app->get('/about', function() {
    $page = 'about';
    require_once 'header.php';
    require_once 'partials/about.php';
});

$app->run();

require_once 'footer.php';