<!-- app/Views/templates/header.php -->
<!DOCTYPE html>
<html>
<?= view('templates/head', ['title' => isset($title) ? $title : 'Mi Tienda Online']) ?>
<body>
    <div class="hm-header">
        <div class="container">
            <div class="header-menu">
                <div class="container1">
                    <img class="logo" src="/assets/image/imagenes logo/logito.png" alt="Imagen">
                    <div class="tex-logo">
                        <h2>CONSTRUHOGAR</h2>
                    </div>
                </div>
                <nav class="hm-menu">
                    <ul class="menu">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/productos">Productos</a></li>
                        <li><a href="/nosotros">Nosotros</a></li>
                        <li><a href="/contacto">Contacto</a></li>
                    </ul>
                    <div class="hm-icon-cart">
                        <a href="/carrito">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>0</span>
                        </a>
                    </div>
                    <?php if (session()->get('usuario_id')): ?>
                        <div class="hm-user">
                            <span>Bienvenido, <?= session()->get('usuario_nombre') ?></span>
                            <a href="/usuarios/logout">Cerrar sesión</a>
                        </div>
                    <?php else: ?>
                        <div class="hm-user">
                            <a href="/usuarios/login">Iniciar sesión</a>
                        </div>
                    <?php endif; ?>
                    <div class="icon-menu">
                        <button type="button"><i class="fas fa-bars"></i></button>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container mt-4">
