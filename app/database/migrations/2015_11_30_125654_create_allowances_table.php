<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllowancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('allowances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('allowance_name');
			$table->integer('organization_id')->unsigned()->default('0')->index('allowances_organization_id_foreign')->nullable();
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
		Schema::drop('allowances');
	}

}
