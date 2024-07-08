<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
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
            return redirect()->to('/auth/login')->with('error', 'Usuario o contraseña incorrectos');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
