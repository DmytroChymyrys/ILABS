<?php
// Routes


//$app->get('/', 'HomeController:index');

$app->get('/', 'AuthController:index');



$app->post('/', 'AuthController:create')->setName('create.user');

//$app->post('/', $controller = 'AuthController:create' , function($request, $response, $args) use($app)  {
//    $which = $request->getParam('which');
//    if ('first_form' === $which) {
//
//       // return $app->post('/', 'AuthController:create');
//
//    } else if ('second_form' === $which){
//       echo "oops";
//    }
//});



