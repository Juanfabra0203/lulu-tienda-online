<?php
require_once "../clases/Carrito.php";

$usuario_id = 1; // provisional hasta tener login
$carrito = new Carrito();
$items = $carrito->obtenerCarrito($usuario_id);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1>Mi Carrito</h1>
    <?php if (count($items) > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                <?php foreach ($items as $item): ?>
                    <?php $total += $item['subtotal']; ?>
                    <tr>
                        <td><?= htmlspecialchars($item['nombre']) ?></td>
                        <td>$<?= number_format($item['precio'], 2) ?></td>
                        <td><?= $item['cantidad'] ?></td>
                        <td>$<?= number_format($item['subtotal'], 2) ?></td>
                        <td>
                            <a href="eliminar_carrito.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" class="text-end"><strong>Total:</strong></td>
                    <td colspan="2"><strong>$<?= number_format($total, 2) ?></strong></td>
                </tr>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Seguir comprando</a>
    <?php else: ?>
        <p>No tienes productos en el carrito</p>
        <a href="test.php" class="btn btn-primary">Ir a la tienda</a>
    <?php endif; ?>
</div>
</body>
</html>
