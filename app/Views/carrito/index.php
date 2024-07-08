<!-- app/Views/carrito/index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->include('templates/head') ?>
    <title>Carrito de Compras</title>
    <style>
        .cart-container {
            margin-top: 50px;
        }

        .table {
            margin-top: 20px;
        }

        .btn-danger, .btn-success {
            margin: 5px 0;
        }

        .empty-cart {
            text-align: center;
            margin-top: 50px;
        }

        .empty-cart p {
            font-size: 1.2rem;
        }

        .empty-cart a {
            color: #007bff;
            text-decoration: none;
        }

        .empty-cart a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?= $this->include('templates/nav') ?>
    <div class="container cart-container">
        <h1 class="mb-4">Carrito de Compras</h1>
        <?php if (isset($carrito) && count($carrito) > 0): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carrito as $item): ?>
                        <tr>
                            <td><?= esc($item['nombre']) ?></td>
                            <td>$<?= esc($item['precio']) ?></td>
                            <td><?= esc($item['cantidad']) ?></td>
                            <td>$<?= esc($item['precio'] * $item['cantidad']) ?></td>
                            <td>
                                <a href="/carrito/remove/<?= $item['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="text-right">
                <a href="productos" class="btn btn-success">Seguir Comprando</a>
            </div>
        <?php else: ?>
            <div class="empty-cart">
                <p>Tu carrito está vacío.</p>
                <a href="/">Regresar a la tienda</a>
            </div>
        <?php endif; ?>
    </div>
    <?= $this->include('templates/footer') ?>

    <!-- Animaciones : AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Mi Script -->
    <script src="/assets/js/app.js"></script>

    <script>
        AOS.init({
            duration: 1200,
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
