<?php
class VentasController extends BaseController {
	
	protected $layout = 'layout.default';

	public function getIndex() {
		$this->layout->content = View::make('index');
	}

	public function getAgregar() {
		$this->layout->content = View::make('ventas.agregar');
	}
	
}
?>