<?php

require_once __DIR__ . '/../vendor/autoload.php';


$app = new Silex\Application();



$app->get('/', function() use ($app) {
    $data = array('app' => 'api');
    return $app->json($data);
})->bind('home');



$app->run();
