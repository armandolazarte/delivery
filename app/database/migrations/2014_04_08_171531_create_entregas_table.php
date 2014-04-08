<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('entregas',function($table){
			$table->increments('id');
			$table->integer('fact_profit_id')->unsigned();
			$table->integer('client_profit_id')->unsigned();
			$table->integer('chofer_id')->unsigned();
			$table->integer('tasa');
			$table->dateTime('fecha_entrega');
			$table->timestamps();
			$table->boolean('active')->default(1);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
