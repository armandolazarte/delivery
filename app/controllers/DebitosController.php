<?php
	class DebitosController extends BaseController {
		protected $layout = 'layout.default';
		public function getIndex(){
			$this->layout->content = View::make('index');
		}
	}
?>