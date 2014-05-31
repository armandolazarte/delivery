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