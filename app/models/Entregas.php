<?php

class Entregas extends Eloquent {
	protected $table = 'entregas';
	protected $fillable = array('fact_profit_id','client_profit_id','chofer_id','tasa','monto','fecha_entrega','compania_id');

	public static function validate($input){	
		$messages = array(
    		'required' => 'El campo :attribute es obligatorio.',
    		'integer' => 'El campo :attribute debe ser un número entero.',
    		'min' => 'El campo :attribute debe ser mayor a :min.',
    		'numeric' => 'El campo :attribute debe ser un valor numérico.',
    		'date' => 'El campo :attribute debe ser contener un formato de fecha válido.'
		);

		$rules = array(
			'fact_profit_id' => 'Required|Integer|Min:0',
			'client_profit_id' => 'Required|Integer|Min:0',
			'chofer_id' => 'Required|Integer|Min:0',
			'compania_id' => 'Required|Integer|Min:0',
			'tasa' => 'Required|Numeric|Min:0',
			'monto' => 'Required|Numeric|Min:0',
			'fecha_entrega' => 'Required|Date'
		);
		return Validator::make($input,$rules,$messages);
	}

	public static function calcGanancia($chofer_id,$mes,$año){
		$data = Entregas::where('active','=','1');
		switch($mes){
			case 'enero':
				$data = $data
					->where('fecha_entrega','>=',$año.'-01-01')
					->where('fecha_entrega','<=',$año.'-01-31');
			break;
			case 'febrero':
				$data = $data
					->where('fecha_entrega','>=',$año.'-02-01')
					->where('fecha_entrega','<=',$año.'-02-31');
			break;
			case 'marzo':
				$data = $data
					->where('fecha_entrega','>=',$año.'-03-01')
					->where('fecha_entrega','<=',$año.'-03-31');					
			break;
			case 'abril':
				$data = $data
					->where('fecha_entrega','>=',$año.'-04-01')
					->where('fecha_entrega','<=',$año.'-04-31');
			break;
			case 'mayo':
				$data = $data
					->where('fecha_entrega','>=',$año.'-05-01')
					->where('fecha_entrega','<=',$año.'-05-31');
			break;
			case 'junio':
				$data = $data
					->where('fecha_entrega','>=',$año.'-06-01')
					->where('fecha_entrega','<=',$año.'-06-31');
			break;
			case 'julio':
				$data = $data
					->where('fecha_entrega','>=',$año.'-07-01')
					->where('fecha_entrega','<=',$año.'-07-31');
			break;
			case 'agosto':
				$data = $data
					->where('fecha_entrega','>=',$año.'-08-01')
					->where('fecha_entrega','<=',$año.'-08-31');
			break;
			case 'septiembre':
				$data = $data
					->where('fecha_entrega','>=',$año.'-09-01')
					->where('fecha_entrega','<=',$año.'-09-31');
			break;
			case 'octubre':
				$data = $data
					->where('fecha_entrega','>=',$año.'-10-01')
					->where('fecha_entrega','<=',$año.'-10-31');
			break;
			case 'noviembre':
				$data = $data
					->where('fecha_entrega','>=',$año.'-11-01')
					->where('fecha_entrega','<=',$año.'11-31');
			break;
			case 'diciembre':
				$data = $data
					->where('fecha_entrega','>=',$año.'-12-01')
					->where('fecha_entrega','<=',$año.'-12-31');
			break;
		}
		$data = $data->where('chofer_id','=',$chofer_id);
		$data = $data->get();
		$temp = 0;
		foreach($data as $item){
			$temp = $temp+(($item['monto']*$item['tasa'])/100);
		}
		$temp = number_format($temp,2);
		return $temp;
	}
}

?>