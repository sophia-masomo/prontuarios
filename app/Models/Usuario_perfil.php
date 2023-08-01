<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_perfil extends Model
{
    use HasFactory;

    protected $table = 'usuario_perfis';

    protected $fillable = [
        'id_perfil',
        'id_usuario',
    ];
}
