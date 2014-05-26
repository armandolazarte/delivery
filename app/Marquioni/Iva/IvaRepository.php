<?php namespace Marquioni\Iva;

use \Iva as Iva;

class IvaRepository implements IvaRepositoryInterface {
	
	public function getAll(){
		return Iva::all();
	}

	public function findById($id=null){
		if(is_null($id)){
			echo 'error';
		}else{
			return Iva::find($id);
		}
	}

	public function createOrUpdate($input=null){
		if(is_null($input->id)){
			//crear una nueva entrada
		}else{
			//Actualizar una entrada.
		}
		return Iva::all();
	}

	public function paginateAll($perPage,$columns=null) {
		return Iva::orderBy('created_at','desc')->paginate(10);
	}
}
?>