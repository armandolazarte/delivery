<?php namespace Marquioni\Repositories\Tablas;

interface VendedorRepository extends BaseRepository {

	public function vendedorConSusClientes($vendedorId);
	
}
?>