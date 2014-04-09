<?php 
class EntregasController extends BaseController {
	
	protected $layout = "layout.default";

	public function getIndex(){
		$this->layout->content = View::make('entregas.add');
		
	}

	public function getAdd(){
		$this->layout->content = View::make('entregas.add');
	}

	public function postAdd(){
		$v = Entregas::validate(Input::all());
		if( $v->passes() ){
			$formdata = array(
				'fact_profit_id' => Input::get('entrega_factura'),
				'client_profit_id' => Input::get('entrega_cliente'),
				'chofer_id' => Input::get('entrega_chofer'),
				'tasa' => Input::get('entrega_tasa'),
				'monto' => Input::get('entrega_monto'),
				'fecha_entrega' => Input::get('entrega_fecha')
			);
			Entregas::create($formdata);
			return Redirect::to('entregas/add');
		}else{
			return Redirect::to('entregas/add')->withErrors($v);
		}
	}
}
?>