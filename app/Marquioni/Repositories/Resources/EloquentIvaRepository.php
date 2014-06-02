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
	public function obtenerTodos(){
		return $this->iva->all();
	}

	/**
	* findById($id): Devuelve las entradas que coincidan con el ID en el parámetro.
	* @param int $id ID correspondiente a la entrada que se busca en la tabla.
	* @return iva
	**/
	public function buscarPorId($id){
		return $this->iva->find($id);
	}

	/**
	* createOrUpdate($input): Crea una nueva entrada o actualiza una existente en la tabla.
	* @param int $id ID correspondiente a la entrada que se busca en la tabla.
	* @return object Model::validate
	**/
	public function crear($input){
		if(is_array($input)){
			return $this->iva->create($input);
		}
	}

	public function obtenerQuincenaPorMes($quincena,$month,$year){
		$query = '';
		switch($quincena){
			case 1:
				$query = $this->iva->whereBetween('fecha_facturacion',array(date('Y-m-d',mktime(0,0,0,1,$month,$year)),date('Y-m-d',mktime(0,0,0,15,$month,$year))))->get();
			break;
			case 2:
				$query = $this->iva->whereBetween('fecha_facturacion',array(date('Y-m-d',mktime(0,0,0,16,$month,$year)),date('Y-m-d',mktime(0,0,0,30,$month,$year))))->get();
			break;
		}
		return $query;
	}

	public function paginarTodos($perPage){
		$result = $this->iva->orderBy('created_at','desc')->paginate($perPage);
		return $result;
	}
}
?>