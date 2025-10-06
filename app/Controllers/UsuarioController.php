<?php

namespace App\Controllers;
use App\Models\Usuario;

class UsuarioController extends BaseController
{
    public function login()
    {
        $session = session();
        $usuarioModel = new Usuario();

        $nomusuario = $this->request->getPost('nomusuario');
        $claveacceso = $this->request->getPost('claveacceso');

        $usuario = $usuarioModel->getUser($nomusuario);

        if (!$usuario) {
            $session->setFlashdata('error', 'Usuario no encontrado');
            return redirect()->to(base_url('/'));
        }

        if (!password_verify($claveacceso, $usuario['claveacceso'])) {
            $session->setFlashdata('error', 'Contraseña incorrecta');
            return redirect()->to(base_url('/'));
        }

        // Guardamos los datos del usuario en la sesión
        $session->set([
            'id'          => $usuario['id'],
            'nombres'     => $usuario['nombres'],
            'apellidos'   => $usuario['apellidos'],
            'nomusuario'  => $usuario['nomusuario'],
            'nivelacceso' => $usuario['nivelacceso'],
            'avatar'      => $usuario['avatar'] ?? null,
            'logged_in'   => true
        ]);

        // Redirige al inicio (la página principal después del login)
        return redirect()->to(base_url('/inicio'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
