<?php

class Entregas extends Eloquent {
	protected $table = 'entregas';
	protected $fillable = array('fact_profit_id','client_profit_id','chofer_id','tasa','monto','fecha_entrega');

	public static function validate($input){	
		$rules = array(
			'fact_profit_id' => 'Required|Integer|Min:0',
			'client_profit_id' => 'Required|Integer|Min:0',
			'chofer_id' => 'Required|Integer|Min:0',
			'tasa' => 'Required|Numeric|Min:0',
			'monto' => 'Required|Numeric|Min:0',
			'fecha_entrega' => 'Required|Date'
		);
		return Validator::make($input,$rules);
	}
}

?>