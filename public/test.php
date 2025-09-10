<?php

require_once "../clases/Producto.php";
require_once "../config/conexion.php";

/*
$db = new Conexion();
$conn = $db->conectar();

if ($conn) {
    echo "Conexion Exitosa!";
} else {
    echo "Conexion Errada - No se pudo conectar";
}
    * */

$producto = new Producto();
$lista = $producto->obtenerProductos();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Test clases</title>
</head>

<body>
    <h1>Lista de productos</h1>
    <ul>
        <?php foreach ($lista as $item): ?>
            <li>
                <img src="" alt="">
                <strong><?= htmlspecialchars($item['nombre_producto']) ?></strong> -
                $<?= number_format($item['precio'], 2) ?>
                (Stock: <?= $item['stock'] ?>)
            </li>
        <?php endforeach; ?>
    </ul>


    <div class="container py-5">
    <h1 class="mb-4 text-center">Nuestra Tienda</h1>

    <div class="row">
        <?php foreach ($lista as $item): ?>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm " style="width: 18rem; margin:auto;">
                    <img class="object-fit-contain" src="../assets/img/<?=htmlspecialchars($item['imagen'])?>" 
                         class="card-img-top" 
                         alt="<?= htmlspecialchars($item['nombre_producto']) ?>"
                         style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($item['nombre_producto']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($item['descripcion']) ?></p>
                        <p class="text-success fw-bold">$<?= number_format($item['precio'], 2) ?></p>
                        <a href="agregar_carrito.php?producto_id=<?= $item['id'] ?>" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>