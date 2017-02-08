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

        return $this->view->render($response, 'auth_user.twig');

    }

}

