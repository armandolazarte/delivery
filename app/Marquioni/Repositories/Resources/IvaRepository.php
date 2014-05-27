<?php namespace Marquioni\Repositories\Resources;

interface IvaRepository {

	public function getAll();
	public function findById($id);
	public function createOrUpdate($input);
	public function paginateOrderedByCreated($perPage);

}
?>