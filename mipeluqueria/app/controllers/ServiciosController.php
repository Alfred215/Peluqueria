<?php

namespace App\Controllers;

require_once "app/models/Servicios.php";
use App\Models\Servicios;
/**
*
*/
class ServiciosController
{

    function __construct()
    {
        // echo "En ServiciosController";
    }

    public function index()
    {
        //buscar datos
        $servicios = Servicios::all();
        //pasar a la vista
        // var_dump ($servicios); exit();
        require('app/views/servicios/index.php');
    }
    
    public function create()
    {
        require 'app/views/servicios/create.php';
    }

    public function store()
    {
        $servicios = new Servicios();
        $servicios->id = $_REQUEST['id'];
        $servicios->servicio = $_REQUEST['servicio'];
        $servicios->descripcion = $_REQUEST['descripcion'];
        $servicios->tiempo = $_REQUEST['tiempo'];
        $servicios->precio = $_REQUEST['precio'];
        $servicios->insert();
        header('Location:'.PATH.'/servicios');
    }

    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $servicios = Servicios::find($id);
        // var_dump($user);
        // exit();
        require('app/views/servicios/show.php');        
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $servicios = Servicios::find($id);
        require 'app/views/servicios/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $servicios->id = $_REQUEST['id'];
        $servicios->servicio = $_REQUEST['servicio'];
        $servicios->descripcion = $_REQUEST['descripcion'];
        $servicios->tiempo = $_REQUEST['tiempo'];
        $servicios->precio = $_REQUEST['precio'];
        $servicios->save();
        header('Location:'.PATH.'/servicios');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $servicios = Servicios::find($id);
        $servicios->delete();
        header('Location:'.PATH.'/servicios');
    }   
}
