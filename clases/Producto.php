<?php

require_once "../config/conexion.php";

class Producto {
    private $conn;
    private $tabla = "productos";

    public function __construct(){
        $db = new Conexion();       
        $this->conn = $db->conectar();
    }

    public function obtenerProductos(){
        $sql = " SELECT * FROM " . $this->tabla;
        $stmt = $this->conn -> prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id){
        $sql = " SELECT * FROM " . $this->tabla . "WHERE id = :id LIMIT 1";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":id", $id,PDO:: PARAM_INT);
        $stmt -> execute();
        return $stmt->fetchAll(PDO:: FETCH_ASSOC);
    }

    public function nuevoProducto($nombre,$descripcion,$precio,$stock,$imagen){
        $sql = "INSERT INTO (nombre_producto,descripcion,precio,stock,imagen) 
        VALUES(:nombre_producto, :descripcion, :precio, :stock, :imagen)";

        $stmt = $this-> conn -> prepare($sql);
        $stmt -> bindParam(":nombre_producto", $nombre);
        $stmt -> bindParam(":descripcion", $descripcion);
        $stmt -> bindParam(":precio", $precio);
        $stmt -> bindParam(":stock", $stock);
        $stmt -> bindParam(":imagen", $imagen);

        return $stmt->execute();
    }

    public function actualizarProducto($id,$nombre,$descripcion,$precio,$stock,$imagen){
        $sql = "UPDATE " . $this->tabla . 
        "SET nombre = :nombre , descripcion = :descripcion , precio = :precio , stock = :stock , imagen = :imagen 
        WHERE id = :id" ;
        $stmt = $this-> conn -> prepare($sql);

        $stmt -> bindParam(":id", $id);
        $stmt -> bindParam(":nombre" , $nombre);
        $stmt -> bindParam(":descripcion" , $descripcion);
        $stmt -> bindParam(":precio" , $precio);
        $stmt -> bindParam(":stock" , $stock);
        $stmt -> bindParam(":imagen" , $imagen);

        return $stmt -> execute();

    }

}



?>