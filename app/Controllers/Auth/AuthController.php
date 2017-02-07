<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as Respect;

class AuthController extends Controller{

    public function index($request, $response)
    {

        return $this->view->render($response, 'home.twig');
    }

    public function create($request, $response)
    {
        $validation = $this->validator->validate($request,[

            'name' =>Respect::noWhitespace()->notEmpty()->alpha(),
            'email' =>Respect::noWhitespace()->notEmpty(),
            'password' =>Respect::noWhitespace()->notEmpty(),
        ]);

        if($validation->failed()){

            return $response->withRedirect($this->router->pathFor('home'));
        }

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
