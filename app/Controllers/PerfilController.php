<?php

namespace App\Controllers;
use App\Models\Usuario;

class PerfilController extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }

        $usuarioModel = new Usuario();
        $data['usuario'] = $usuarioModel->find($session->get('id'));

        return view('perfil/index', $data);
    }

    public function actualizarAvatar()
{
    $session = session();
    $usuarioModel = new Usuario();

    $file = $this->request->getFile('avatar');

    if ($file && $file->isValid() && !$file->hasMoved()) {
        $newName = $file->getRandomName();
        $uploadPath = FCPATH . 'public/images/users/';

        // Crea la carpeta si no existe
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        // Mueve el archivo
        $file->move($uploadPath, $newName);

        // Actualiza en BD y en sesión
        $usuarioModel->update($session->get('id'), ['avatar' => $newName]);
        $session->set('avatar', $newName);
    }

    return redirect()->to(base_url('/perfil'));
}

}
