<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'num_prontuario',
        'observacoes',
        'dt_criacao',
        'dt_atualizacao',
        'dt_exclusao',
    ];
}
