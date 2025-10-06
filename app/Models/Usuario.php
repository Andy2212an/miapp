<?php

namespace App\Models;
use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id'; // usa el nombre de tu PK

    // 👇 Campos que se pueden insertar o actualizar
    protected $allowedFields = [
        'nombre',
        'apellido',
        'correo',
        'nomusuario',
        'password',
        'avatar',       // Campo que se usará al actualizar el avatar
        'create_at',
        'update_at'
    ];

    // Campos de auditoría
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';

    /**
     * Retorna el registro del nombre del usuario indicado
     */
    public function getUser($nomusuario = '')
    {
        return $this->where('nomusuario', $nomusuario)->first();
    }
}
