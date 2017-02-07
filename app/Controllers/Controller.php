<?php

namespace App\Controllers;

abstract class Controller{

    protected $container;

    /**
     * Controller constructor.
     * @param $container
     */

    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     * @param $prop
     * check if container has a special property
     */

    public function __get($prop)
    {
        if($this->container->{$prop}){

            return $this->container->{$prop};
        }
    }

}
