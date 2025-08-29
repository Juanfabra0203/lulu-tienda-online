<?php

class Conexion{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'tienda_db';
    private $conn;

    public function conectar(){
        $this-> conn = null;

        try{
            $this -> conn = new PDO("mysql:host=" . $this->host . "; dbname=". $this->database , $this->user, $this->pass  );
            $this -> conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this -> conn -> exec("SET NAMES utf8mb4");
        }catch(PDOException $e){
            echo "Error de conexión" . $e->getMessage();
        }

        return $this->conn;

    }
}
?>