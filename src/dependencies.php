<?php
// DIC configuration


use App\Controllers\Auth\AdminController;
use App\Controllers\Auth\AuthController;
use App\Controllers\Auth\PasswordController;
use App\Controllers\HomeController;
use App\Validation\Validator;


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

// Validator
$container['validator'] = function ($container) {

    return new Validator;

};


$container['view'] = function ($container) {

    return new \Slim\Views\PhpRenderer(__DIR__ . '/../resource/views/');
};


$container['HomeController'] = function ($container) {

    return new HomeController($container);
};

$container['AuthController'] = function ($container) {

    return new AuthController($container);
};

$container['PasswordController'] = function ($container) {

    return new PasswordController($container);
};

$container['AdminController'] = function ($container) {

    return new AdminController($container);
};




