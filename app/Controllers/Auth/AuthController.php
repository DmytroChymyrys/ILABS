<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;

class AuthController extends Controller{

    /**
     * @param $request
     * @param $response
     * @return mixed
     * render the home page
     */

    public function create($request, $response)
    {
        User::create([
            'name' => $request->getParam('name'),
            'email' => $request->getParam('email'),
            'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
        ]);
    }

}
