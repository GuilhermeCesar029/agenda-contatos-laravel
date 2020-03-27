<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'name', 'sobrenome', 'telefone', 'email', 'data_nascimento', 'descricao', 'avatar',
    ];
}
