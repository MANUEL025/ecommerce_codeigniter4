<!-- app/Views/pedidos/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pedidos</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    <form action="/pedidos/search" method="get">
        <input type="text" name="search" placeholder="Buscar pedidos...">
        <button type="submit">Buscar</button>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Total</th>
            <th>Status</th>
            <th>Fecha</th>
        </tr>
        <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td><?= esc($pedido['id']) ?></td>
            <td><?= esc($pedido['usuario_nombre']) ?></td>
            <td><?= esc($pedido['total']) ?></td>
            <td><?= esc($pedido['status']) ?></td>
            <td><?= esc($pedido['fecha']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <div>
        <?= $pager->links() ?>
    </div>
</body>
</html>
