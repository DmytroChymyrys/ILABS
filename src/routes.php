<?php
// Routes


$app->get('/auth/user', 'HomeController:index')->setName('auth_user');

$app->get('/', 'AuthController:index')->setName('home');

$app->post('/signin', 'AuthController:signin')->setName('signin');

$app->get('/signup', function($request, $response){

    return $this->view->render($response, 'signup.twig');

})->setName('signup');
//$app->post('/signup', 'AuthController:create')->setName('create.user');

$app->post('/', $controller = 'AuthController:create' , function($request, $response, $args) use($app)  {
    $which = $request->getParam('which');
    if ('first_form' === $which) {

       // return $app->post('/', 'AuthController:create');

    } else if ('second_form' === $which){
       echo "oops";
    }
});

$app->get('/logout', 'AuthController:logout')->setName('logout');

$app->get('/change/password', 'PasswordController:index')->setName('ch_pswd');

$app->post('/change/password', 'PasswordController:changePassword');

