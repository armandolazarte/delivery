<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionIva extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iva', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('rif_beneficiario');
			$table->integer('periodo')->unsigned();
			$table->date('fecha_facturacion');
			$table->string('nro_factura');
			$table->string('nro_control');
			$table->float('monto_total');
			$table->float('monto_base');
			$table->float('iva_retenido');
			$table->string('nro_nota_credito');
			$table->float('monto_exento');
			$table->float('alicuota');
			$table->string('tipo_operacion');
			$table->integer('id_comprobante')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iva');
	}

}
