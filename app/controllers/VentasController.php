<?php
class VentasController extends BaseController {
	
	protected $layout = 'layout.default';

	public function getIndex() {
		return "hola mundo";
	}

	public function getAgregar() {
		$this->layout->content = View::make('ventas.agregar');
	}
	
}
?>