<?php namespace Marquioni\Logic\Retenciones;
use Marquioni\Repositories\Resources\IvaRepository as IvaRepository;

class IvaProcess implements IvaProcessInterface {
	
	protected $iva;
	protected $validarStatus = FALSE;

	public function __construct(IvaRepository $iva)
	{
		$this->iva = $iva;
	}

	public function crearRegistro($inputArray)
	{
		$iva = $this->iva;
		$data = array(
			'agente_rif' => strtoupper($inputArray['agente_rif']),
			'beneficiario_nombre' => strtoupper($inputArray['beneficiario_nombre']),
			'rif_beneficiario' => strtoupper($inputArray['rif_beneficiario']),
			'periodo' => $inputArray['year'].$inputArray['month'],
			'fecha_facturacion' => date("Y-m-d",strtotime($inputArray['fecha_facturacion'])),
			'nro_factura' => $inputArray['nro_factura'],
			'nro_control' => $inputArray['nro_control'],
			'monto_base' => $inputArray['monto_base'],
			'iva_retenido' => ($inputArray['monto_base']*$inputArray['alicuota']*$inputArray['tasa_retencion'])/10000,
			'monto_total' => $inputArray['monto_base']+($inputArray['monto_base']*$inputArray['alicuota'])/100,
			'monto_exento' => 0,
			'nro_nota_credito' => 0,
			'alicuota' => $inputArray['alicuota'],
			'tipo_operacion' => 'c',
			'id_comprobante' => $inputArray['id_comprobante']
		);
		$v = $this->validarDatosRegistro($data);
		if($this->validarSuccess())
		{
			$iva->crear($data);
		}
		return $v;
	}

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
			'id_comprobante' => array('Required','Regex:/[2][0][0-9]{2}(([0]\d)|([1][0-2]))[0-9]{8}/','unique:iva')
		);
		return Validator::make($input,$rules,$messages);
	}

	public function validarDatosRegistro($input)
	{
		if(is_array($input))
		{
			$v = $this->validate($input);
			if($v->passes()){
				$this->validarStatus = TRUE;
			}else{
				$this->validarStatus = FALSE;
			}
			return $v;
		}else{
			throw new Exception('Tipo de datos no válido.');
		}

	}

	public function GenerarTXT($quincena,$month,$year) {
		
		if(isset($quincena) && isset($month) && isset($year))
		{
			$output ='';
			$query = json_decode($this->iva->obtenerQuincenaPorMes($quincena,$month,$year),true);
			foreach($query as $item) {
				$output .= $item['agente_rif']."\t".$item['periodo']."\t".$item['fecha_facturacion']."\t".$item['tipo_operacion']."\t".'01'."\t".$item['rif_beneficiario']."\t".$item['nro_factura']."\t".$item['nro_control']."\t".$item['monto_total']."\t".$item['monto_base']."\t".$item['iva_retenido']."\t".'0'."\t".$item['periodo'].str_pad($item['id'],8,'0',STR_PAD_LEFT)."\t".$item['monto_exento']."\t".$item['alicuota']."\t".'0'."\n";
			}
			echo $output;
		}
		

	}

	public function validarSuccess()
	{
		if($this->validarStatus == TRUE)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}

?>