<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function listar()
    {
        return array(
            'nome' => 'Vitor Hugo Oliveira',
            'telefone' => '995252368'
        );
    }
}
