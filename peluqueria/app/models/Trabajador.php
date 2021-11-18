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

    public function find(){
        
    }

    public function insert(){
        $consulta=Trabajador::db();
        $cnslt = $consulta->prepare('INSERT INTO trabajador(nombre, apellidos, dni, cuenta, correo, ss, telefono, salario, fecha_nav, categoria) VALUES(:nombre, :apellidos, :dni, :cuenta, :correo, :ss, :telefono, :direccion, :salario, :fecha_nav, :categoria)');
        $cnslt->bindValue(':nombre', $this->nombre);
        $cnslt->bindValue(':apellidos', $this->apellidos);
        $cnslt->bindValue(':dni', $this->dni);
        $cnslt->bindValue(':cuenta', $this->cuenta);
        $cnslt->bindValue(':correo', $this->correo);
        $cnslt->bindValue(':ss', $this->ss);
        $cnslt->bindValue(':telefono', $this->telefono);
        $cnslt->bindValue(':direccion', $this->direccion);
        $cnslt->bindValue(':salario', $this->salario);
        $cnslt->bindValue(':fecha_nav', $this->fecha);
        $cnslt->bindValue(':categoria', $this->categoria);
        return $cnslt->execute();
    }

    public function save(){
        
    }

    public function delete(){
        
    }
}