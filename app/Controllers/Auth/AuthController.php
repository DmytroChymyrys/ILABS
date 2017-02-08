<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as Respect;

class AuthController extends Controller
{

    /**
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {

        return $this->view->render($response, 'home.twig');
    }

    /**
     * @param $request
     * @param $response
     * @return mixed
     */

    public function create($request, $response)
    {
        $validation = $this->validator->validate($request, [

            'name' => Respect::noWhitespace()->notEmpty()->alpha(),
            'email' => Respect::noWhitespace()->notEmpty()->email(),
            'password' => Respect::noWhitespace()->notEmpty(),
        ]);

        $_SESSION['old'] = $request->getParams();

        if ($validation->failed()) {

            return $response->withRedirect($this->router->pathFor('signup'));
        }

        if (User::where('email', $request->getParam('email'))->exists() === false) {

            User::create([
                'name' => $request->getParam('name'),
                'email' => $request->getParam('email'),
                'password' => password_hash(trim($request->getParam('password')), PASSWORD_DEFAULT),
            ]);

            $_SESSION['user'] = 'Welcome  ' . $request->getParam('name');


            return $response->withRedirect($this->router->pathFor('auth_user'));

        } else {

            $_SESSION['em_exist'] = 'Email is already taken';
            return $response->withRedirect($this->router->pathFor('signup'));
        }
    }

    /**
     * @param $request
     * @param $response
     * @return mixed
     */
    public function signin($request, $response)
    {

        $user = User::where('email', $request->getParam('email'))->first();

        $_SESSION['old_s'] = $request->getParams();


        if ($request->getParam('email') == $user->email && password_verify($request->getParam('pass'), $user->password)) {


            $_SESSION['user'] = 'Welcome  ' . $user->name;

            $_SESSION['usr'] = $user->name;

            unset($_SESSION['sign_err']);


            return $response->withRedirect($this->router->pathFor('auth_user'));

        } else {

            $_SESSION['sign_err'] = 'Opps something went wrong, try to input a valid data.';

            return $response->withRedirect($this->router->pathFor('home'));


        }


    }

    /**
     * @param $request
     * @param $response
     * @return mixed
     */

    public function logout($request, $response)
    {
        session_destroy();

        return $response->withRedirect($this->router->pathFor('home'));

    }

}
