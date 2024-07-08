<!-- app/Views/admin/notificaciones/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Notificaciones</title>
</head>
<body>
    <h1>Notificaciones</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Mensaje</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($notificaciones as $notificacion): ?>
        <tr>
            <td><?= esc($notificacion['id']) ?></td>
            <td><?= esc($notificacion['mensaje']) ?></td>
            <td><?= esc($notificacion['created_at']) ?></td>
            <td>
                <?php if (!$notificacion['leida']): ?>
                <a href="/admin/notificaciones/markAsRead/<?= esc($notificacion['id']) ?>">Marcar como leída</a>
                <?php else: ?>
                Leída
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
