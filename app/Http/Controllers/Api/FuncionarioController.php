<?php

namespace App\Http\Controllers\Api;

use App\Funcionario;
use App\API\ApiError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FuncionarioController extends Controller
{

	private $funcionario;

	public function __construct(Funcionario $funcionario){

		$this->funcionario = $funcionario;
	}

	//Função de inserção de registros dos funcionários

    public function insert(Request $request){

    	try {

        	$insereFuncionario = $request->all();
			$this->funcionario->create($insereFuncionario);

			$return = ['Funcionario' => ['msg' => 'Funcionario criado com sucesso!']];
			return response()->json($return, 201);

		}catch(\Exception $e){

				if(config('app.debug')){

					return response()->json(ApiError::errorMessage($e->getMessage(), 1010,500));
				}
		}

		return response()->json(ApiError::errorMessage('Houve erro ao realizar operacao de inclusão.', 1010,500));
	}
	
    //Função de atualização de registros dos funcionários

    public function update(Request $request, $id){
	
		try{
		
			$atualizaFuncionario = $request->all();
			$funcionario = $this->funcionario->find($id);

			$funcionario->update($atualizaFuncionario);
			$return = ['funcionario' => ['msg' => 'Funcionario atualizado com sucesso!']];
			return response()->json($return, 201);	


		}catch(\Exception $e){

			if(config('app.debug')){
				return response()->json(ApiError::errorMessage($e->getMessage(), 1011, 500));
		}

		return response()->json(ApiError::errorMessage('Houve um erro ao realizar operacao de atualizacao.',1011, 500));
		}	
   }

   //Função de deleção por campo de identificação do funcionário:

    public function delete (Funcionario $id){
	
		try{
			
			$id->delete();
			return response()->json(['funcionario' => ['msg' => 'Funcionario:' . $id->name . 'removido com sucesso!']],200); 
			
		}catch(\Exception $e){
		
			if(config('app.debug')){
				return response()->json(ApiError::errorMessage($e->getMessage(), 1012, 500));
			}

		return response()->json(ApiError::errorMessage('Houve um erro ao realizar operacao de deleção.',1012, 500));
		}	
	}

    //Função de busca por campo de identificação do funcionário:

    public function showid($id)
    {
    	$funcionario = $this->funcionario->find($id);

    		if (!$funcionario) {
    			return response()->json(ApiError::errorMessage('Funcionario nao encontrado!', 4040),404);
    		}

    	$result = ['Funcionario' => $funcionario];
    	return response()->json($result);
    }


	//Função de listagem dos Funcionários

    public function list()
    {     
    	$lista_funcionarios = ['funcionarios'=> $this->funcionario->paginate(10)];
    	return response()->json($lista_funcionarios);
    }

}
