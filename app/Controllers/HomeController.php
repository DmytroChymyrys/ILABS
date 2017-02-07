<?php


namespace App\Controllers;

use App\Models\User;


class HomeController extends Controller{

    /**
     * @param $request
     * @param $response
     * @return mixed
     * render the home page
     */

    public function index($request, $response)
    {
       // $user =  User::find(1);
       // var_dump($user->email);
//        User::create([
//            'name' => 'Oksana',
//            'email' => 'email.com',
//            'password' => '123'
//        ]);
       // die();
        return $this->view->render($response, 'home.twig');
    }

}

