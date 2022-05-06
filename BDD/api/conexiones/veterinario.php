<?php

require_once __DIR__.("/../conexion.php");

class veterinarioConexion extends Conexion{

    //CRUD
    public function insertar ($nombre, $password, $apPaterno, $apMaterno, $correo, $direccion, $telefono, $hora_creacion){
        $this -> conectar();
        $sql = "INSERT INTO veterinario(nombre, password, apPaterno, apMaterno, correo, direccion, telefono, hora_creacion)
        VALUES(:nombre, :password, :apPaterno, :apMaterno, :correo, :direccion, :telefono, :hora_creacion)";
        $sentencia_pdo = $this -> pdo -> prepare($sql);
        $sentencia_pdo-> bindParam(':nombre',        $nombre,           PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':password',      $password,         PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':apPaterno',     $apPaterno,        PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':apMaterno',     $apMaterno,        PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':correo',        $correo,           PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':direccion',     $direccion,        PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':telefono',      $telefono,         PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':hora_creacion', $hora_creacion,    PDO::PARAM_STR);
        
        try {
            $funciona =  $sentencia_pdo -> execute();
        } catch (PDOException $e) {
            $this -> pdo =null;
            return $e->getMessage();
        }

        return $funciona;
        $this -> pdo =null;
    }


    public function editar ($id, $nombre, $password, $apPaterno, $apMaterno, $correo, $direccion, $telefono, $hora_creacion){
        $this -> conectar();
        $sql = "UPDATE veterinario SET nombre=:nombre, password=:password, apPaterno=:apPaterno, apMaterno=apMaterno, correo=:correo, direccion=:direccion, telefono=:telefono, hora_creacion=:hora_creacion 
        WHERE id=:id";
        
        $sentencia_pdo = $this -> pdo -> prepare($sql);
        $sentencia_pdo-> bindParam(':id',            $id,               PDO::PARAM_INT);
        $sentencia_pdo-> bindParam(':nombre',        $nombre,           PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':password',      $password,         PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':apPaterno',     $apPaterno,        PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':apMaterno',     $apMaterno,        PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':correo',        $correo,           PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':direccion',     $direccion,        PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':telefono',      $telefono,         PDO::PARAM_STR);
        $sentencia_pdo-> bindParam(':hora_creacion', $hora_creacion,    PDO::PARAM_STR);
        
        try {
            $funciona =  $sentencia_pdo -> execute();
        } catch (PDOException $e) {
            $this -> pdo =null;
            return $e->getMessage();
        }

        return $funciona;
        $this -> pdo =null;
    }
}