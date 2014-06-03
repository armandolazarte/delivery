<?php namespace Marquioni\Repositories\Tablas;

interface BaseRepository {

	public function crear(array $input);
	public function eliminar($id);
	public function buscarPorId($id);
	public function obtenerTodos();
	public function actualizarPorId($id);

}
?>