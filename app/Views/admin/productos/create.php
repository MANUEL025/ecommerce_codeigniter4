<!-- app/Views/admin/productos/create.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->include('templates/head') ?>
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 0;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 0;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <?= $this->include('templates/nav') ?>
    <div class="container">
        <h1 class="my-4">Agregar Producto</h1>
        <form action="/admin/productos/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="productimage1">Imagen 1:</label>
                <input type="file" id="productimage1" name="productimage1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="productimage2">Imagen 2:</label>
                <input type="file" id="productimage2" name="productimage2" class="form-control">
            </div>
            <div class="form-group">
                <label for="productimage3">Imagen 3:</label>
                <input type="file" id="productimage3" name="productimage3" class="form-control">
            </div>
            <div class="form-group">
                <label for="categoria_id">Categoría:</label>
                <input type="text" id="categoria_id" name="categoria_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="text" id="stock" name="stock" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
    <?= $this->include('templates/footer') ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
