<?php namespace Marquioni\Repositories\Resources;

interface IvaRepository {
	public function obtenerTodos();
	public function buscarPorId($id);
	public function crear($input);
	public function paginarTodos($perPage);
	public function validar($input);
}

?>