<?php namespace Marquioni\Repositories\Tablas;

interface ClienteRepository extends BaseRepository {

	public function clienteConSusOrdenes($clienteId);

}

?>