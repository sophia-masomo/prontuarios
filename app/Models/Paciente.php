<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function contatos(): HasMany
    {
        return $this->hasMany(Contato::class, 'id_paciente', 'id');
    }
}
