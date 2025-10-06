<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class InicioController extends Controller
{
    public function index()
    {
        // Verificamos que haya sesión iniciada
        if (!session()->has('id')) {
            return redirect()->to('/login');
        }

        // Pasamos los datos del usuario a la vista
        $data = [
            'nombre' => session()->get('nombres'),
            'apellido' => session()->get('apellidos'),
            'avatar' => session()->get('avatar') // puede ser null
        ];

        return view('inicio', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
