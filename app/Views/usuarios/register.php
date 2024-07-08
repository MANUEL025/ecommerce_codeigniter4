<?= $this->include('templates/header', ['title' => 'Registro de Usuario']) ?>
<style>
    body {
        background-color: #f8f9fa;
    }
    .register-container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .register-header {
        margin-bottom: 20px;
        text-align: center;
    }
    .form-group label {
        font-weight: bold;
    }
    .form-footer {
        text-align: center;
        margin-top: 20px;
    }
</style>
<div class="container mt-5">
    <div class="register-container">
        <h1 class="register-header mb-4">Registro de Usuario</h1>
        <form action="/usuarios/store" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
</div>
<?= $this->include('templates/footer') ?>
