<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'tel_celular',
        'data_nascimento',
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'uf_estado'
    ];
}
