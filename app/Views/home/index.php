<!-- app/Views/home.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <?= $this->include('templates/head') ?>
</head>

<body>
    <?= $this->include('templates/nav') ?>

    <?= $this->include('templates/carrousel') ?>

    <div class="hm-page-block">
    <div class="container">
        <div class="header-title">
            <h1 data-aos="fade-up" data-aos-duration="3000">Categorías</h1>
        </div>
        <div class="hm-grid-category">
            <div class="grid-item" data-aos="fade-up" data-aos-duration="1000">
                <a href="#">
                    <img src="/assets/image/Pisos laminados/Piso laminado Harbour Oak Grey.png" alt="">
                    <div class="c-info">
                        <h3>Pisos Laminados</h3>
                    </div>
                </a>
            </div>
            <div class="grid-item" data-aos="fade-up" data-aos-duration="1500">
                <a href="#">
                    <img src="/assets/image/Pisos PVC/pisos.png" alt="">
                    <div class="c-info">
                        <h3>Pisos PVC</h3>
                    </div>
                </a>
            </div>
            <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                <a href="/productos.php#seccion-destino3">
                    <img src="/assets/image/techos/techo_pvc_.jpeg" alt="">
                    <div class="c-info">
                        <h3>Techos</h3>
                    </div>
                </a>
            </div>
            <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                <a href="/productos.php#seccion-destino">
                    <img src="/assets/image/porcelanatos/pocelanato_01.webp" alt="">
                    <div class="c-info">
                        <h3>Ceramicos</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="hm-page-block bg-fondo">
    <div class="container">
        <div class="header-title" data-aos="fade-up">
            <h1>Productos Populares</h1>
        </div>

        <ul class="hm-tabs" data-aos="fade-up">
            <li class="hm-tab-link">Porcelanatos</li>
            <li class="hm-tab-link">Panel Adhesivo</li>
            <li class="hm-tab-link">Techos</li>
            <li class="hm-tab-link ative">En Oferta</li>
        </ul>

        <div class="tabs-content" data-aos="fade-up">
            <div class="grid-product">
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/porcelanatos/porcelanatomarmol.png" alt="">
                        </a>
                        <span class="stin stin-new">Nuevo</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Porcelanato Para Piso Y Pared Estilo Mármol</h3>
                        </a>
                        <div class="precio">
                            <span>$115000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/porcelanatos/pocelanato_01.webp" alt="">
                        </a>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Porcelanato Valenza</h3>
                        </a>
                        <div class="precio">
                            <span>$120000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/porcelanatos/porcelanato.webp" alt="">
                        </a>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Piso porcelanato Classic Calacatta</h3>
                        </a>
                        <div class="precio">
                            <span>$119000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/porcelanatos/porcelanatoblakhues.jpg" alt="">
                        </a>
                        <span class="stin stin-new">Nuevo</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Porcelanato Importado Beige Pleno Pulido</h3>
                        </a>
                        <div class="precio">
                            <span>$117000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabs-content" data-aos="fade-up">
            <div class="grid-product">
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/paredes/dunas.jpg" alt="">
                        </a>
                        <span class="stin stin-new">Nuevo</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Panel de Relieve Beach</h3>
                        </a>
                        <div class="precio">
                            <span>$35000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/paredes/panelnegro.jpg" alt="">
                        </a>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Panel 3D Negro</h3>
                        </a>
                        <div class="precio">
                            <span>$128000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/paredes/panel3d.jpeg" alt="">
                        </a>
                        <span class="stin stin-new">Nuevo</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Panel decorativo s040 cuadros black</h3>
                        </a>
                        <div class="precio">
                            <span>$68000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/paredes/panelcolores.jpg" alt="">
                        </a>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Panel 3D linea exclusiva caja x 6 metros</h3>
                        </a>
                        <div class="precio">
                            <span>$158000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabs-content" data-aos="fade-up">
            <div class="grid-product">
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/techos/techo-driwall.jpg" alt="">
                        </a>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Techos en driwall</h3>
                        </a>
                        <div class="precio">
                            <span>$22000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/techos/techo.jpg" alt="">
                        </a>
                        <span class="stin stin-new">Nuevo</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Techo PVC Miel</h3>
                        </a>
                        <div class="precio">
                            <span>$68000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/techos/techopvcroble.png" alt="">
                        </a>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Techo PVC roble</h3>
                        </a>
                        <div class="precio">
                            <span>$112000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/techos/pvcblanco.jpg" alt="">
                        </a>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Techo PVC blanco brillante</h3>
                        </a>
                        <div class="precio">
                            <span>$78000</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabs-content" data-aos="fade-up">
            <div class="grid-product">
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/techos/tablillamadera.webp" alt="">
                        </a>
                        <span class="stin stin-oferta">Oferta</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Tablilla estilo madera acanalada</h3>
                        </a>
                        <div class="precio">
                            <span>$25590</span>
                            <span class="thash">$29590</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/techos/nudos.jpg" alt="">
                        </a>
                        <span class="stin stin-oferta">Oferta</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Tablilla imitación madera con diseño de nudos</h3>
                        </a>
                        <div class="precio">
                            <span>$32500</span>
                            <span class="thash">$49900</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/paredes/dunas.jpg" alt="">
                        </a>
                        <span class="stin stin-oferta">Oferta</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Panel adhesivo con diseño de dunas</h3>
                        </a>
                        <div class="precio">
                            <span>$59500</span>
                            <span class="thash">$79900</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="p-portada">
                        <a href="/productos">
                            <img src="/assets/image/porcelanatos/porcelanato.webp" alt="">
                        </a>
                        <span class="stin stin-oferta">Oferta</span>
                    </div>
                    <div class="p-info">
                        <a href="/productos">
                            <h3>Porcelanato estilo marmol blanco brillante</h3>
                        </a>
                        <div class="precio">
                            <span>$98550</span>
                            <span class="thash">$154300</span>
                        </div>
                        <a href="/productos" class="hm-btn btn-primary uppercase">VER MAS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    
    <?= $this->include('templates/footer') ?>

    <!-- Animaciones : AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Mi Script -->
    <script src="/assets/js/app.js"></script>

    <script>
        AOS.init({
            duration: 15,
        });
    </script>

</body>

</html>
