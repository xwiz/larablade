<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 * This up function will be run whenever you run php artisan migrate
     * The table we are creating should look as follows:
     * id (integer PRIMARY key)
     * email (varchar 50)
     * password (varchar 32)
     * first_name (varchar 50)
     * last_name (varchar 50)
     * created_at (timestamp)
     * updated_at (timestamp)
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
            $table->increments('id');
            $table->string('email', 50);
            $table->string('password', 64);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();//adds created_at and updated_at columns
		});
	}

	/**
	 * Reverse the migrations.
     * This will be run whenever we are rolling back this migration 
	 * with command php artisan migrate:rollback
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
