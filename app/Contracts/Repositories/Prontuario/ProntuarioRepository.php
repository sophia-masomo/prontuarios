<?php

namespace App\Contracts\Repositories\Prontuario;

//use App\Interfaces\ProntuarioRepositoryInterface;
use App\Models\Prontuario;

class ProntuarioRepository implements ProntuarioRepositoryInterface
{
    public function store(Request $request) {
        $prontuario = new Prontuario;

        $prontuario->num_prontuario = $request->num_prontuario;
        $prontuario->observacoes = $request->observacoes;
        $prontuario->dt_criacao = $request->dt_criacao;
        $prontuario->dt_atualizacao = $request->dt_atualizacao;
        $prontuario->dt_exclusao = $request->dt_exclusao;

        $prontuario->save();
    }

    /*public function update() {

    }

    public function porld() {
        
    }

    public function remove() {

    }*/
} 