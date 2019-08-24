<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
    	'nome', 'telefone', 'cpf','endereco','cidade','estado'
    ];
}
