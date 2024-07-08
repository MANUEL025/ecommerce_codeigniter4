<?php
// app/Controllers/UsuarioController.php
namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function register()
    {
        return view('usuarios/register');
    }

    public function store()
    {
        $usuarioModel = new UsuarioModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'direccion' => $this->request->getPost('direccion'),
            'rol' => 'user' // por defecto todos los nuevos usuarios son 'user'
        ];

        $usuarioModel->save($data);

        return redirect()->to('/auth/login');
    }

    public function login()
    {
        return view('usuarios/login');
    }

    public function authenticate()
    {
        $usuarioModel = new UsuarioModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $usuarioModel->where('email', $email)->first();

        if ($usuario && password_verify($password, $usuario['password'])) {
            session()->set([
                'usuario_id' => $usuario['id'],
                'usuario_rol' => $usuario['rol'],
                'isLoggedIn' => true,
            ]);

            // Redirige basado en el rol del usuario
            if ($usuario['rol'] == 'admin') {
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/');
            }
        } else {
            return redirect()->to('/usuarios/login')->with('error', 'Usuario o contraseña incorrectos');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
