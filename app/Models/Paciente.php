<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'nome_mae',
        'nome_pai',
        'cns',
        'genero',
        'data_nasc',
        'cpf',
    ];
}
