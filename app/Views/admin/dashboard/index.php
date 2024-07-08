<!-- app/Views/admin/dashboard/index.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <?= $this->include('templates/head', ['title' => 'Panel Administrativo']) ?>
    <style>
        .table-actions {
            display: flex;
            gap: 10px;
        }

        .modal-body img {
            max-height: 250px;
            object-fit: contain;
            width: 100%;
        }
    </style>
</head>

<body>
    <?= $this->include('templates/nav') ?>
    <div class="container mt-5">
        <h1 class="mb-4">Administrar Productos</h1>
        <a href="<?= base_url('admin/productos/create') ?>" class="btn btn-primary mb-3">Agregar Nuevo Producto</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) : ?>
                    <tr>
                        <td><?= esc($producto['id']) ?></td>
                        <td><?= esc($producto['nombre']) ?></td>
                        <td><?= esc($producto['descripcion']) ?></td>
                        <td>$<?= esc($producto['precio']) ?></td>
                        <td><?= esc($producto['stock']) ?></td>
                        <td>
                        <img src="<?= ('/admin/productimages/' . $producto['id'] . '/' . $producto['productimage1']) ?>" alt="<?= htmlentities($producto['nombre']) ?>">
                        </td>
                        <td class="table-actions">
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#productModal<?= $producto['id'] ?>">Ver</button>
                            <a href="<?= base_url('admin/productos/edit/' . $producto['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('admin/productos/delete/' . $producto['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</a>
                        </td>
                    </tr>

                    <!-- Modal para ver detalles del producto -->
                    <div class="modal fade" id="productModal<?= $producto['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?= $producto['id'] ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="productModalLabel<?= $producto['id'] ?>">Detalles del Producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Carrusel de imágenes -->
                                    <div id="modalCarousel<?= $producto['id'] ?>" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="<?= ('/admin/productimages/' . $producto['id'] . '/' . $producto['productimage1']) ?>" alt="<?= htmlentities($producto['nombre']) ?>">
                                            </div>
                                            <?php if (!empty($producto['productimage2'])) : ?>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="<?= ('/admin/productimages/' . $producto['id'] . '/' . $producto['productimage2']) ?>" alt="<?= htmlentities($producto['nombre']) ?>">
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($producto['productimage3'])) : ?>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="<?= ('/admin/productimages/' . $producto['id'] . '/' . $producto['productimage3']) ?>" alt="<?= htmlentities($producto['nombre']) ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <a class="carousel-control-prev" href="#modalCarousel<?= $producto['id'] ?>" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="carousel-control-next" href="#modalCarousel<?= $producto['id'] ?>" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Siguiente</span>
                                        </a>
                                    </div>
                                    <!-- Detalles del producto -->
                                    <div class="modal-product-details mt-3">
                                        <h2 class="modal-product-name"><?= htmlentities($producto['nombre']) ?></h2>
                                        <p class="modal-product-price"><strong>$<?= htmlentities($producto['precio']) ?></strong></p>
                                        <p class="modal-product-description"><?= htmlentities($producto['descripcion']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= $this->include('templates/footer') ?>

    <!-- Animaciones : AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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