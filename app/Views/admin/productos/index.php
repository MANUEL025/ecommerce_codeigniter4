<!-- app/Views/productos/index.php -->
<?= $this->include('templates/header', ['title' => 'Lista de Productos']) ?>
<h1 class="my-4">Lista de Productos</h1>
<div class="row">
    <?php foreach ($productos as $producto): ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="<?= esc($producto['imagen']) ?>" alt="<?= esc($producto['nombre']) ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= esc($producto['nombre']) ?></h5>
                <p class="card-text"><?= esc($producto['descripcion']) ?></p>
                <p class="card-text"><strong>$<?= esc($producto['precio']) ?></strong></p>
                <a href="/productos/view/<?= esc($producto['id']) ?>" class="btn btn-primary">Ver Detalles</a>
                <a href="/carrito/add/<?= esc($producto['id']) ?>" class="btn btn-success">Agregar al Carrito</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div>
    <?= $pager->links() ?>
</div>
<?= $this->include('templates/footer') ?>
