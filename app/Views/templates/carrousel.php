<?= view('templates/head') ?>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/image/banners/salamoderna.jpg" alt="Imagen 1" style="width: 100%; max-height: 500px; object-fit: cover;">
            <div class="carousel-caption">
                <h3>Diseños modernos</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/image/banners/slidehome.webp" alt="Imagen 2" style="width: 100%; max-height: 500px; object-fit: cover;">
            <div class="carousel-caption">
                <h3>Interiores impecables</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/image/banners/cocina.jpg" alt="Imagen 3" style="width: 100%; max-height: 500px; object-fit: cover;">
            <div class="carousel-caption">
                <h3>Cocinas modernas</h3>
            </div>
        </div>
    </div>

    <!-- Controles de navegación -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </a>
</div>
