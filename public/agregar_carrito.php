<?php

require_once "../clases/Carrito.php";

$usuario_id = 1;

if(isset($_GET['producto_id'])){
    $producto_id = intval($_GET['producto_id']);

    $carrito = new Carrito();
    $carrito ->agregarCarrito($usuario_id,$producto_id,1);

    header("Location: test.php");
    exit;
}else{
    echo "ERROR: No se agrego el producto";
}

?>