<?php

class Iva extends Eloquent{
	protected $table = 'iva';
	protected $fillable = array('beneficiario_nombre','agente_rif','rif_beneficiario','periodo','fecha_facturacion','nro_factura','nro_control',
		'monto_total','monto_base','iva_retenido','nro_nota_credito','monto_exento','alicuota','tipo_operacion','id_comprobante');

	public static function validate($input){	
		$messages = array(
    		'required' => 'El campo :attribute es obligatorio.',
    		'integer' => 'El campo :attribute debe ser un número entero.',
    		'min' => 'El campo :attribute debe ser mayor a :min.',
    		'max' => 'El campo :attribute debe ser menor a :max.',
    		'numeric' => 'El campo :attribute debe ser un valor numérico.',
    		'date' => 'El campo :attribute debe ser contener un formato de fecha válido.',
    		'regex' => 'El campo :attribute no cumple con el formato esperado.',
    		'unique' => 'El valor introducido en :attribute ya existe en la base de datos.'
		);

		$rules = array(
			'beneficiario_nombre' => 'Required',
			'agente_rif' => 'Required|alpha_num|size:10|Regex:/[JVG][0-9]{9}/',
			'rif_beneficiario' => 'Required|alpha_num|size:10|Regex:/[JVG][0-9]{9}/',
			'periodo' => array('Required','Regex:/[2][0][0-9]{2}(([0][1-9])|[1][0-2])/'),
			'fecha_facturacion' => 'Required|Date',
			'nro_factura' => 'Required|Numeric|Min:0',
			'nro_control' => 'Required|Regex:/[0-9]{2}[-][0-9]{1,10}/',
			'monto_base' => 'Required|Numeric|Min:0',
			'monto_total' => 'Required|Numeric|Min:0',
			'iva_retenido' => 'Required|Numeric|Min:0',
			'nro_nota_credito' => 'Required|Integer|Min:0',
			'monto_exento' => 'Required|Numeric|Min:0',
			'alicuota' => 'Required|Integer|Min:0|Max:100',
			'tipo_operacion' => 'Required',
			'id_comprobante' => array('Required','Regex:/[2][0][0-9]{2}(([0]\d)|([1][0-2]))[0-9]{8}/','Unique:iva')
		);
		return Validator::make($input,$rules,$messages);
	}
}

?>