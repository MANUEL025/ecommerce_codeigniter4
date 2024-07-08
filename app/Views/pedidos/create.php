<!-- app/Views/pedidos/create.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Procesar Pedido</title>
</head>
<body>
    <h1>Procesar Pedido</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($carrito as $item): ?>
            <tr>
                <td><?= $item['nombre'] ?></td>
                <td><?= $item['precio'] ?></td>
                <td><?= $item['cantidad'] ?></td>
                <td><?= $item['precio'] * $item['cantidad'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <form action="/pedidos/store" method="post">
        <button type="submit">Confirmar Pedido</button>
    </form>
</body>
</html>
