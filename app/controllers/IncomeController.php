<?php
class IncomeController extends BaseController {
	protected $layout = 'layout.default';

	public function agregarVenta {
		$this->layout->content = View::make('income.agregar');
	}

	
}
?>