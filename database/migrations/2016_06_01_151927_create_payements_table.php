<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('payment_name');
			$table->Integer("currency_id")->unsigned();
			$table->boolean('exchange_status');
			$table->float('min_exchange');
			$table->float("max_exchanbe");
			$table->float("reserve_amount");
			$table->string("message");
			$table->boolean("show_as_source");
			$table->boolean("show_as_destination");
			$table->boolean("exchange_automatic");
			$table->string("access_level");
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payments');
	}

}
