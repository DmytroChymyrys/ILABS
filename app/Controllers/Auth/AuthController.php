<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;
use App\Models\User;

class AuthController extends Controller{

    public function index($request, $response)
    {


        return $this->view->render($response, 'home.twig');
    }

    public function create($request, $response)
    {
        User::create([
            'name' => $request->getParam('name'),
            'email' => $request->getParam('email'),
            'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
        ]);
//        echo "dsgs";
//        var_dump($request->getParams());
//        die();
    }

}
