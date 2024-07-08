<!-- app/Views/home.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <?= $this->include('templates/head') ?>
</head>

<body>
    <?= $this->include('templates/nav') ?>

    <?= $this->include('templates/carrousel') ?>

    <div class="container5">
        <div class="abot-section">
            <div>
                <h1></h1>
                <p>Somos una empresa comprometida con la mejora de la experiencia de compra para nuestros clientes.
                    Hemos creado una plataforma tecnológica innovadora que simplifica y agiliza el proceso de
                    adquisición de artículos para la remodelación de interiores.</p>
            </div>
            <img src="/assets/image/imagenes logo/logo.png" alt="">
        </div>


    </div>
    <div class="wrapper2">
    <div class="container6">
      <div class="contact-form">
        <h2>Envíanos un mensaje</h2>
        <form action="enviar.php" method="post">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" required></textarea>

          <button type="submit">Enviar</button>
        </form>
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
            duration: 1200,
        });
    </script>

</body>

</html>
