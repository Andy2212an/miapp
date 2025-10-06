<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SUsuarios extends Seeder
{
    public function run()
    {
        $data = [
            [
                'apellidos' => 'System',
                'nombres' => 'Admin',
                'nomusuario' => 'admin',
                'claveacceso' => password_hash('Admin789*', PASSWORD_DEFAULT),
                'nivelacceso' => 'ADMIN',
                'avatar' => null,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'apellidos' => 'Uriol',
                'nombres' => 'Andy',
                'nomusuario' => 'Danny',
                'claveacceso' => password_hash('Andy123', PASSWORD_DEFAULT),
                'nivelacceso' => 'ADMIN',
                'avatar' => null,
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('usuarios')->insertBatch($data);
    }
}
