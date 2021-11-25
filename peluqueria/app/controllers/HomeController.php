<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        require "app/views/home/home.php";
    }

    public function home()
    {
        require "app/views/home/house.php";
    }

    public function insertar(){
        require "app/views/home/house.php";
    }
}
