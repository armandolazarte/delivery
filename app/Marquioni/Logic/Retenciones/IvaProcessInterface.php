<?php namespace Marquioni\Logic\Retenciones;

interface IvaProcessInterface {

	public function crearRegistro($inputArray);
	public function validarDatosRegistro($inputArray);
	public function validarSuccess();
	public function GenerarTXT($quincena,$month,$year);

}
?>