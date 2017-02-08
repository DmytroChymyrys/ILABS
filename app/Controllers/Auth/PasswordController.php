<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as Respect;


class PasswordController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'ch_passwrd.twig');
    }


    public function changePassword($request, $response)
    {


        $validation = $this->validator->validate($request,[

            'old-password' => Respect::noWhitespace()->notEmpty(),

            'password' => Respect::noWhitespace()->notEmpty(),


            ]);

        if($validation->failed()){

            die('password');

            return $response->withRedirect($this->router->pathFor('ch_pswd'));
        }

        //$user = User::where('email',$request->getParam('email'))->first();

        $user = User::where('name', $_SESSION['usr'])->first();

        var_dump($user);
        if( password_verify($request->getParam('old-password'), $user->password)) {

            $user->updatePassword($request->getParam('password'));

            $_SESSION['user'] = 'Welcome  ' . $user->name;

            return $response->withRedirect($this->router->pathFor('auth_user'));

        }
    }
}

