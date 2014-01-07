<?php

use Illuminate\Database\Migrations\Migration;

class SonusCreateSonusprogressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sonusprogress', function(Blueprint $table) {
			// Unique identifier
			$table->increments('id');
			// MD5 identifier
			$table->string('job', 32);
			// Percentage
			$table->integer('progress')->nullable();
			// Current file size
			$table->bigInteger('total_size')->nullable();
			// Current time
			$table->string('current_time')->nullable();
			// Final time
			$table->string('final_time');
			// Dropped frames
			$table->bigInteger('drop_frames')->nullable();
			// Timestamp
			$table->timestamps();
			// Soft delete jobs
			$table->softDeletes();

			// Indexes
			$table->primary('id');
			$table->index('job');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop table
		Schema::drop('sonusprogress');
	}

}