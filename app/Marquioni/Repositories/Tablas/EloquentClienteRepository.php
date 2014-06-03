<?php namespace Marquioni\Repositories\Tablas;
use \Cliente as cliente;

class EloquentClienteRepository implements ClienteRepository {
	public function __construct(cliente $cliente){
		$this->cliente = $cliente;
	}
}
?>