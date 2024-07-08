<!-- app/Views/productos/index.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <?= $this->include('templates/head') ?>
    <style>
        .card img {
            max-height: 150px; 
            object-fit: cover;
        }
        .card-body {
            padding: 10px;
        }
        .card-title {
            font-size: 1rem;
        }
        .card-text {
            font-size: 0.875rem;
        }
        .card .btn {
            font-size: 0.875rem;
            padding: 5px 10px;
        }
        .modal-body img {
            max-height: 250px; 
            object-fit: contain; 
            width: 100%; 
        }
        .modal-content {
        max-width: 400px; 
        margin: auto; 
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #333;
    }

    .carousel-control-prev,
    .carousel-control-next {
        filter: invert(1); 
    }
    </style>
</head>

<body>
    <?= $this->include('templates/nav') ?>

    <?= $this->include('templates/carrousel') ?>

    <div class="container mt-5">
        <h1 class="mb-4">Productos Disponibles</h1>
        <div id="product-list" class="row">
            <?php foreach ($productos as $producto): ?>
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="<?= ('/admin/productimages/' . $producto['id'] . '/' . $producto['productimage1']) ?>" alt="<?= htmlentities($producto['nombre']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($producto['nombre']) ?></h5>
                        <p class="card-text"><?= esc($producto['descripcion']) ?></p>
                        <p class="card-text"><strong>$<?= esc($producto['precio']) ?></strong></p>
                        <?php if ($producto['stock'] > 0): ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal<?= $producto['id'] ?>">Ver Detalles</button>
                            <a href="<?= base_url('carrito/add/' . $producto['id']) ?>" class="btn btn-success">Agregar al Carrito</a>
                        <?php else: ?>
                            <div style="color:red">Fuera de Stock</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Modal para cada producto -->
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
                                    <?php if (!empty($producto['productimage2'])): ?>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= ('/admin/productimages/' . $producto['id'] . '/' . $producto['productimage2']) ?>" alt="<?= htmlentities($producto['nombre']) ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($producto['productimage3'])): ?>
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
                                <?php if ($producto['stock'] > 0): ?>
                                    <a href="<?= base_url('carrito/add/' . $producto['id']) ?>" class="btn btn-primary">Agregar al Carrito</a>
                                <?php else: ?>
                                    <div style="color:red">Fuera de Stock</div>
                                <?php endif; ?>
                                <p class="modal-product-description"><?= htmlentities($producto['descripcion']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container">
        <?= $pager->links() ?>
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
