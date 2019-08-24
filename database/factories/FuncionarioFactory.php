<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Funcionario::class, function (Faker $faker) {

    return [
    	'nome' => $faker->name,
    	'telefone'=> $faker->randomFloat(2,0,8),
    	'cpf'=> $faker->text     
    ];

});
