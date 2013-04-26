<?php

use CAC\Component\RateLimit\Provider\RateLimitSilexProvider;

use CAC\Component\RateLimit\RateLimit;

use CAC\Component\RateLimit\Storage\DoctrineCacheStorage;

use Doctrine\Common\Cache\FilesystemCache;

require_once __DIR__ . '/../vendor/autoload.php';


$app = new Silex\Application();
$app['debug'] = true;
$app->register(new RateLimitSilexProvider());



$app->get('/', function() use ($app) {
    // Create OBJECT
    // UserID mock
    $userId = md5(1);

    $rateLimiter = $app['cac.ratelimit'];


    if (!$rateLimiter->hasReachedLimit($userId, 23)) {
        $rateLimiter->substract($userId, 23);
    }

    var_dump($rateLimiter->getCurrentLimit($userId));
    //var_dump($rateLimiter->getCurrentLimit($userId));
    //var_dump($rateLimiter->hasReachedLimit($userId, 20));
    //$rateLimiter->substract($userId, 40);

    //var_dump($rateLimiter->getCurrentLimit($userId));
    //var_dump($rateLimiter->hasReachedLimit($userId, 20));
    //$rateLimiter->substract($userId, 40);



    $data = array('app' => 'api');
    return $app->json($data);
})->bind('home');



$app->run();
