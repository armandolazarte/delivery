<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCamposIva extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('iva', function(Blueprint $table)
		{
			//
			$table->string('beneficiario_nombre');
			$table->string('agente_rif');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('iva', function(Blueprint $table)
		{
			//
			$table->dropColumn('beneficiario_nombre');
			$tabke->dropColumn('agente_rif');
		});
	}

}