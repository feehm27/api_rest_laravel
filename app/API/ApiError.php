<?php

namespace App\API;

class ApiError

{
	
	public static function errorMessage($message, $code){

		return [
			'Funcionario' => [
				'msg' => $message,
				'code' => $code
			]
		];
	}
}

