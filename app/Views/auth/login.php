<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-footer {
            margin-top: 20px;
            text-align: center;
        }
        .form-check {
            margin-top: 10px;
        }
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="login-container">
            <h1 class="login-header">Iniciar Sesión</h1>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <form action="/auth/authenticate" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="remember" name="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Recordarme</label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    <a href="/usuarios/register" class="btn btn-secondary">Registrarse</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
