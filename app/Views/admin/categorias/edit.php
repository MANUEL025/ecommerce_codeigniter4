<!-- app/Views/admin/categorias/edit.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoría</title>
</head>
<body>
    <h1>Editar Categoría</h1>
    <form action="/admin/categorias/update/<?= $categoria['id'] ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= $categoria['nombre'] ?>" required><br>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
