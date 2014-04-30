<?php 
class EntregasController extends BaseController {
	
	protected $layout = "layout.default";

	public function getIndex(){
		return Redirect::to('entregas/tabla');
	}

	public function getTabla(){
		$data = Entregas::where('active','=','1');
		$indice = array(
			6 =>'Diego Villalobos',
			3 =>'Javier Carvallo',
			2 =>'Marco Vilera',
			1 =>'Jesus Mastracci',
			4 =>'Eleazar Guia',
			5 =>'Mauricio Gonzales'
		);
		$compania = array(1,2);
		$meses = array('enero'=>0,'febrero'=>0,'marzo'=>0,'abril'=>0,'mayo'=>0,'junio'=>0,'julio'=>0,'agosto'=>0,'septiembre'=>0,'octubre'=>0,'noviembre'=>0,'diciembre'=>0);
		$choferes = array();
		foreach($compania as $v){
			foreach ($indice as $i => $nombre) {
				foreach($meses as $mes => &$valor){
					$valor = Entregas::calcGanancia($i,$mes,2014,$v);
				}
				$choferes[$v][$nombre] = $meses;
				$choferes[$v][$nombre]['nombre'] = $nombre;
			}
		}
		View::share('choferes',$choferes);
		return $this->layout->content = View::make('entregas.tabla');
	}

	public function getAdd(){
		$this->layout->content = View::make('entregas.add');
	}

	public function getList($chofer = null){
		$data = Entregas::where('active','=','1');
		$data = $data->orderBy('fecha_entrega','desc');
		$data = $data->paginate(10);
		View::share('items',$data);
		$this->layout->content = View::make('entregas.list');
	}

	public function postAdd(){
		$v = Entregas::validate(Input::all());
		if( $v->passes() ){
			$formData = array(
				'fact_profit_id' => Input::get('fact_profit_id'),
				'client_profit_id' => Input::get('client_profit_id'),
				'chofer_id' => Input::get('chofer_id'),
				'compania_id' => Input::get('compania_id'),
				'tasa' => Input::get('tasa'),
				'monto' => Input::get('monto'),
				'fecha_entrega' => Input::get('fecha_entrega')
			);
			Entregas::create(Input::all());
			$formData['mensaje'] = 'Se creó exitosamente la entrega de la factura número: '.$formData['fact_profit_id'];
			//$this->layout->with('data',$formData);
			View::share('data',$formData);
			$this->layout->content = View::make('entregas.add');
		}else{
			return Redirect::to('entregas/add')->withErrors($v);
		}
	}
}
?>