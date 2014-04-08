<?php 
class EntregasController extends BaseController {
	
	protected $layout = "layout.default";
	public function getIndex(){
		$this->layout->content = View::make();
	}

	public function getAdd(){
		$this->layout->content = View::make('entregas.add');
	}
}
?>