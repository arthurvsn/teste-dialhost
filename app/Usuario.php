<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telCelular',
        'data-nascimento',
        'cep',
        'endereco',
        'cidade',
        'uf-estado'
    ];
}
