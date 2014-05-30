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
			'agente_rif' => strtoupper($inputArray['rif_agente']),
			'beneficiario_nombre' => strtoupper($inputArray['beneficiario_nombre']),
			'rif_beneficiario' => strtoupper($inputArray['rif_beneficiario']),
			'periodo' => $inputArray['year'].$inputArray['month'],
			'fecha_facturacion' => date("Y-m-d",strtotime($inputArray['date_fact'])),
			'nro_factura' => $inputArray['nro_factura'],
			'nro_control' => $inputArray['nro_control'],
			'monto_base' => $inputArray['base_imponible'],
			'iva_retenido' => ($inputArray['base_imponible']*$inputArray['tasa_iva']*$inputArray['tasa_retencion'])/10000,
			'monto_total' => $inputArray['base_imponible']+($inputArray['base_imponible']*$inputArray['tasa_iva'])/100,
			'monto_exento' => 0,
			'nro_nota_credito' => 0,
			'alicuota' => $inputArray['tasa_iva'],
			'tipo_operacion' => 'c',
			'id_comprobante' => $inputArray['numero_comprobante']
		);
		$v = $this->validarDatosRegistro($data);
		if($this->validarSuccess())
		{
			$iva->crear($input);
		}
		return $v;
	}

	public function validarDatosRegistro($input)
	{
		if(is_array($input))
		{
			$v = $this->iva->validar($input);
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