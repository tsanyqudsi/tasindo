<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_badge');
			$table->text('third_party_receipt_number')->nullable();
			$table->text('admin_receipt_number')->nullable();
			$table->boolean('courier');
			$table->integer('sender_data');
			$table->text('dropship_data');
			$table->text('receiver_data');
			$table->text('product_data');
			$table->text('description')->nullable();
			$table->boolean('status');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
