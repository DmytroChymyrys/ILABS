<?php
// DIC configuration

use App\Controllers\Auth\AuthController;
use App\Controllers\HomeController;

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// Eloquent

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) {
    return $capsule;
};


$container['view'] = function ($container) {

    return new \Slim\Views\PhpRenderer(__DIR__ . '/../resource/views/');
};

//twig
//$container['view'] = function ($container) {
//    $view = new \Slim\Views\Twig(__DIR__ . '/../resource/views/', [
//        'cache' => 'false'
//    ]);
//
//    return $view;
//};

$container['HomeController'] = function ($container) {

    return new HomeController($container);
};

$container['AuthController'] = function ($container) {

    return new AuthController($container);
};
