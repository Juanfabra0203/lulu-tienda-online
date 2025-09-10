<?php

use function PHPSTORM_META\sql_injection_subst;

require_once "../config/conexion.php";

class Carrito{

    private $conn;
    private $tabla = "carrito";

    public function __construct(){
        $db = new Conexion();
        $this->conn = $db->conectar();
    }


    public function agregarCarrito($usuario_id, $producto_id, $cantidad = 1){
        $sql = "SELECT * FROM " . $this->tabla . " WHERE usuario_id = :usuario_id AND producto_id = :producto_id";
        $stmt = $this->conn -> prepare($sql);
        $stmt -> bindParam(":usuario_id", $usuario_id);
        $stmt -> bindParam(":producto_id", $producto_id);
        $stmt -> execute();

        if($stmt->rowCount() > 0){
            $sql = "UPDATE " .$this->tabla ."SET cantidad = cantidad + :cantidad WHERE usuario_id = :usuario_id AND producto_id = :producto_id";
            $stmt = $this->conn ->prepare($sql);
            $stmt ->bindParam(":cantidad", $cantidad);
            $stmt ->bindParam(":usuario_id", $usuario_id);
            $stmt -> bindParam(":producto_id", $producto_id);
            return $stmt -> execute();
        }else{
            $sql = "INSERT INTO " . $this->tabla . "(usuario_id, producto_id, cantidad)
            VALUES (:usuario_id , :producto_id , :cantidad)";
            $stmt = $this->conn ->prepare($sql);
            $stmt -> bindParam(":usuario_id" , $usuario_id);
            $stmt -> bindParam(":producto_id" , $producto_id);
            $stmt -> bindParam(":cantidad" , $cantidad);
            return $stmt -> execute();
        }
    }

    
    public function obtenercarrito($usuario_id){
        $sql = "SELECT c.id , p.nombre_producto , p.precio , c.cantidad , (p.precio * c.cantidad) AS subtotal 
        FROM " . $this->tabla . " c INNER JOIN productos p ON c.producto_id = p.id WHERE c.usuario_id = :usuario_id";

        $stmt = $this->conn -> prepare($sql);
        $stmt ->bindParam(":usuario_id" , $usuario_id);
        $stmt ->execute();
        return $stmt->fetchAll(PDO:: FETCH_ASSOC);

    }

    public function eliminar($id){

        $sql = "DELETE FROM" .$this->tabla. "WHERE id = :id";
        $stmt = $this->conn -> prepare($sql);
        $stmt -> bindParam(":id", $id);
        return $stmt -> execute();
    }

    public function vaciar($usuario_id){

        $sql = "DELETE FROM " . $this->tabla . "WHERE usuario_id = :usuario_id";
        $stmt = $this->conn->prepare($sql);
        $stmt -> bindParam(":usuario_id", $usuario_id);
        return $stmt -> execute();

    }


}


?>