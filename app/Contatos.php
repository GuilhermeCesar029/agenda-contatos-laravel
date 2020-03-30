<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $fillable = [
        'nome', 'sobrenome', 'telefone', 'email', 'data_nascimento', 'descricao', 'avatar',
    ];
}
