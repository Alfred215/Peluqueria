<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Trabajador extends Model{

    public function all(){
        $db = Trabajador::db();
        $sql = "SELECT * FROM trabajador";
        $statement = $db->query($sql);
        $trab = $statement->fetchAll(PDO::FETCH_CLASS, Trabajador::class);
        return $trab;
    }

    public function find($id){
        $db = Trabajador::db();
        $statement = $db->prepare('SELECT * FROM trabajador WHERE id=:id');
        $statement->execute(array(':id' => $id));
        $statement->setFetchMode(PDO::FETCH_CLASS, Trabajador::class);
        $trab = $statement->fetch(PDO::FETCH_CLASS);
    
        return $trab;     
    }

    public function insert(){
        $consulta=Trabajador::db();
        $cnslt = $consulta->prepare('INSERT INTO trabajador(nombre, apellidos, dni, correo, telefono, categoria) VALUES(:nombre, :apellidos, :dni, :correo, :telefono, :categoria)');
        $cnslt->bindValue(':nombre', $this->nombre);
        $cnslt->bindValue(':apellidos', $this->apellidos);
        $cnslt->bindValue(':dni', $this->dni);
        $cnslt->bindValue(':correo', $this->correo);
        $cnslt->bindValue(':telefono', $this->telefono);
        $cnslt->bindValue(':categoria', $this->categoria);
        return $cnslt->execute();
    }

    public function save(){
        
    }

    public function delete(){
        
    }
}