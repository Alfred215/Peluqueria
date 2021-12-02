<?php

namespace App\Controllers;

require_once "app/models/Home.php";

use App\Models\Home;

class HomeController
{
    public function index()
    {
        $home = Home::find("1");
        require "app/views/home/home.php";
    }

    public function home()
    {
        $home = Home::find("1");
        require "app/views/home/house.php";
    }

    public function update(){
        $home = Home::find("1");
        $res = move_uploaded_file ($_FILES["foto"]["tmp_name"], "subidos/imagen.jpg");
        $home->titulo  = $_POST['titulo'];
        $home->descripcion = $_POST['descripcion'];
        $home->urls = "subidos/imagen.jpg"; 
        $home->save();
        
        require "app/views/home/house.php";
    }
}
