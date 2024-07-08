<!-- app/Views/pedidos/view.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Detalles del Pedido</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td><?= esc($pedido['id']) ?></td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td><?= esc($pedido['usuario_id']) ?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td><?= esc($pedido['total']) ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?= esc($pedido['status']) ?></td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td><?= esc($pedido['fecha']) ?></td>
            </tr>
        </table>
        <h2 class="my-4">Productos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalles as $detalle): ?>
                <tr>
                    <td><?= esc($detalle['producto_nombre']) ?></td>
                    <td><?= esc($detalle['cantidad']) ?></td>
                    <td><?= esc($detalle['precio']) ?></td>
                    <td><?= esc($detalle['cantidad'] * $detalle['precio']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/pedidos" class="btn btn-primary">Volver a Pedidos</a>
    </div>
</body>
</html>
