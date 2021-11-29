<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Home extends Model{

    public static function all(){
        $db = Home::db();
        $sql = "SELECT * FROM estaciones";
        $statement = $db->query($sql);
        $logs = $statement->fetchAll(PDO::FETCH_CLASS, Home::class);
        return $logs;
    }

    public static function find($id){
        $db = Home::db();
        $statement = $db->prepare('SELECT * FROM estaciones WHERE id=:id');
        $statement->execute(array(':id' => $id));
        $statement->setFetchMode(PDO::FETCH_CLASS, Home::class);
        $servicios = $statement->fetch(PDO::FETCH_CLASS);
    
        return $servicios; 
    }

    public function save(){
        $consulta=Home::db();
        $stmt = $consulta->prepare('UPDATE estaciones SET titulo = :titulo, descripcion = :descripcion WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':descripcion', $this->descripcion);
        return $stmt->execute();
    }
}