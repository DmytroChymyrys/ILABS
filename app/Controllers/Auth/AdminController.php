<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as Respect;

class AdminController extends Controller
{


    public function delete($request, $response)
    {
        User::where('id', $request->getParam('id'))->first()->delete();

        unset($_SESSION['users']);

        $_SESSION['users'] = User::all();

        return $response->withRedirect($this->router->pathFor('admin'));
    }

}
