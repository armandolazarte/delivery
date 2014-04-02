<?php
	class HomeController extends BaseController {
		protected $layout = 'layout.default';
		public function getIndex() {
			$this->layout->content = View::make('index');
		}
	}
?>