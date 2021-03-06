<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as Respect;


class PasswordController extends Controller
{

    /**
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {
        return $this->view->render($response, 'ch_passwrd.twig');
    }

    /**
     * @param $request
     * @param $response
     * @return mixed
     */
    public function changePassword($request, $response)
    {


        $_SESSION['old_ch'] = $request->getParams();

        $validation = $this->validator->validate($request, [

            'email' => Respect::noWhitespace()->notEmpty()->email(),

            'old-password' => Respect::noWhitespace()->notEmpty(),

            'password' => Respect::noWhitespace()->notEmpty(),


        ]);


        if ($validation->failed()) {


            return $response->withRedirect($this->router->pathFor('ch_pswd'));


        }


        if ($user = User::where('email', $request->getParam('email'))->first()) :


            if (password_verify($request->getParam('old-password'), $user->password)) {


                $user->updatePassword($request->getParam('password'));

                $_SESSION['user'] = 'Welcome  ' . $user->name;

                unset($_SESSION['pswd_err']);

                return $response->withRedirect($this->router->pathFor('auth_user'));

            } else {


                $_SESSION['pswd_err'] = 'Old password does not match';

                return $response->withRedirect($this->router->pathFor('ch_pswd'));
            }
        else: $_SESSION['pswd_err'] = 'Sorry, email is incorrect';

            return $response->withRedirect($this->router->pathFor('ch_pswd'));

        endif;
    }
}

