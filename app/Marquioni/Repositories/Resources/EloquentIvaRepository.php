<?php namespace Marquioni\Repositories\Resources;

use \Iva as Iva;

class EloquentIvaRepository implements IvaRepository {

	/**
	* Constructor: Inicializa el modelo Eloquent a ser usado por el repositorio
	* @return void
	**/
	public function __construct(Iva $iva){
		$this->iva = $iva;
	}
	
	/**
	* getAll(): Devuelve todas las entradas de la tabla.
	* @return iva
	**/
	public function getAll(){
		return $this->iva->all();
	}

	/**
	* findById($id): Devuelve las entradas que coincidan con el ID en el parámetro.
	* @param int $id ID correspondiente a la entrada que se busca en la tabla.
	* @return iva
	**/
	public function findById($id=null){
		if(is_null($id)){
			throw new NotFoundException;
		}else{
			return $this->iva->find($id);
		}
	}

	/**
	* createOrUpdate($input): Crea una nueva entrada o actualiza una existente en la tabla.
	* @param int $id ID correspondiente a la entrada que se busca en la tabla.
	* @return bool
	**/
	public function createOrUpdate($input=null){
		if(is_null($input->id)){
			//crear una nueva entrada
		}else{
			//Actualizar una entrada.
		}
		return $this->iva->all();
	}

	public function paginateOrderedByCreated($perPage) {
		return $this->iva->orderBy('created_at','desc')->paginate($perPage);
	}
}
?>