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

            return $response->withRedirect($this->router->pathFor('signup'));
        }

        if (User::where('email',$request->getParam('email'))->exists() === false) {
            User::create([
                'name' => $request->getParam('name'),
                'email' => $request->getParam('email'),
                'password' => password_hash(trim($request->getParam('password')), PASSWORD_DEFAULT),
            ]);

            $_SESSION['user'] = 'Welcome  '. $request->getParam('name');
            return $response->withRedirect($this->router->pathFor('auth_user'));
        } else{

            $_SESSION['em_exist'] = 'Email is already exist';
            return $response->withRedirect($this->router->pathFor('signup'));
        }
    }

    public function signin($request, $response)
    {

        $user = User::where('email',$request->getParam('email'))->first();


        if( $request->getParam('email') == $user->email && password_verify($request->getParam('pass'), $user->password)){


            $_SESSION['user'] = 'Welcome  '. $user->name;
            $_SESSION['usr'] = $user->name;

           return $response->withRedirect($this->router->pathFor('auth_user'));

        }



    }

    public function logout($request, $response)
    {
        session_destroy();

        return $response->withRedirect($this->router->pathFor('home'));

    }

}
