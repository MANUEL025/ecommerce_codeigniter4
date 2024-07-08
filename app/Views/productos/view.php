<!-- app/Views/productos/view.php -->
<?= $this->include('templates/header', ['title' => 'Detalle del Producto']) ?>
<h1 class="my-4"><?= esc($producto['nombre']) ?></h1>
<div class="row">
    <div class="col-md-6">
        <img src="<?= esc($producto['imagen']) ?>" alt="<?= esc($producto['nombre']) ?>" class="img-fluid">
    </div>
    <div class="col-md-6">
        <h3>$<?= esc($producto['precio']) ?></h3>
        <p><?= esc($producto['descripcion']) ?></p>
        <a href="/carrito/add/<?= esc($producto['id']) ?>" class="btn btn-success">Agregar al Carrito</a>
    </div>
</div>
<?= $this->include('templates/footer') ?>
