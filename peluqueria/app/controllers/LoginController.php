<?php

namespace App\Controllers;

use App\Models\Login;

require_once "app/models/Login.php";

class LoginController
{
    function index(){
        require "app/views/login/index.php"; 
    }

    function login()
    {
        $usuario = $_POST['users'];
        $contrasena = $_POST['passwords']; 
        $users = Login::all();

        foreach ($users as $key => $user){
            if($user->users==$usuario && $user->passwords==$contrasena){
                require "app/views/login/login.php"; 
            }else{
                require "app/views/login/index.php"; 
                echo "Usuario incorrecto";
            }
        }
    } 
}