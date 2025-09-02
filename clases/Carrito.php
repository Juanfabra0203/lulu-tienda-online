<?php

require_once "../config/conexion.php";

class Carrito{

    private $conn;
    private $tabla = "carrito";

    public function __contruct($conn){
        $db = new Conexion();
        $this->conn = $db->conectar();
    }


    public function agregarCarrito($usuario_id, $producto_id, $cantidad = 1){
        $sql = "SELECT * FROM " . $this->tabla . "WHERE usuario_id = :usuario_id AND producto_id = :producto_id";
        $stmt = $this->conn -> prepare($sql);
        $stmt -> bindParam(":usuario_id", $usuario_id);
        $stmt -> bindParam(":producto_id", $producto_id);
        $stmt -> execute();

        if($stmt->rowCount() > 0){
            $sql = "UPDATE" .$this->tabla ."SET cantidad = cantidad + :cantidad WHERE usuario_id = :usuario_id AND producto_id = :producto_id";
            $stmt = $this->conn ->prepare($sql);
            $stmt ->bindParam(":cantidad", $cantidad);
            $stmt ->bindParam(":usuario_id", $usuario_id);
            $stmt -> bindParam(":producto_id", $producto_id);
            return $stmt -> execute();
        }else{
            $sql = "INSERT INTO" . $this->tabla . "(usuario_id, producto_id, cantidad)
            VALUES (:usuario_id , :producto_id , :cantidad)";
            $stmt = $this->conn->prepare($sql);
            $stmt -> bindParam(":usuario_id" , $usuario_id);
            $stmt -> bindParam(":producto_id" , $producto_id);
            $stmt -> bindParam(":cantidad" , $cantidad);
            return $stmt -> execute();
        }
    }


}


?>