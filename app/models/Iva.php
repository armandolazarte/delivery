<?php

class Iva extends Eloquent{
	protected $table = 'iva';
	protected $fillable = array('beneficiario_nombre','agente_rif','rif_beneficiario','periodo','fecha_facturacion','nro_factura','nro_control',
		'monto_total','monto_base','iva_retenido','nro_nota_credito','monto_exento','alicuota','tipo_operacion','id_comprobante');
}

?>