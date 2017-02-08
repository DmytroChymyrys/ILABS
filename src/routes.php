<?php

// Routes


$app->get('/auth/user', 'HomeController:index')->setName('auth_user');

$app->get('/', 'AuthController:index')->setName('home');

$app->post('/signin', 'AuthController:signin')->setName('signin');

$app->get('/signup', function($request, $response){

    return $this->view->render($response, 'signup.twig');

})->setName('signup');

$app->post('/', 'AuthController:create');

$app->get('/logout', 'AuthController:logout')->setName('logout');

$app->get('/change/password', 'PasswordController:index')->setName('ch_pswd');

$app->post('/change/password', 'PasswordController:changePassword');

