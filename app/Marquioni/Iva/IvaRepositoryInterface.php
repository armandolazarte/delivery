<?php namespace Marquioni\Iva;

interface IvaRepositoryInterface {

	public function getAll();
	public function findById($id);
	public function createOrUpdate($input);
	public function paginateAll($perPage,$columns);

}
?>