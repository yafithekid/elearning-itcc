<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			try {
				DB::statement('BEGIN TRANSACTION');
				DB::statement("CREATE TABLE IF NOT EXISTS `users`(
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`username` varchar(127) NOT NULL,
					`password` varchar(127) NOT NULL,
					`email` varchar(127) NOT NULL,
					`fullname` varchar(127) NOT NULL,
					`school` varchar(127) NOT NULL,
					`is_admin` tinyint(1) NOT NULL DEFAULT '0',
					`is_teacher` tinyint(1) NOT NULL DEFAULT '0'
					) ENGINE=InnoDB DEFAULT CHARSET=utf8");
				
				DB::statement('ALTER TABLE `users` ADD CONSTRAINT primary_key_id PRIMARY KEY `id` ');
				DB::statement('ALTER TABLE `users` ADD CONSTRAINT unique_username UNIQUE');
				DB::statement('COMMIT');
			} catch(Exception $sql_exception) {
				DB::statement('ROLLBACK');
			}

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		try {
			DB::statement('BEGIN TRANSACTION');
			DB::statement('DROP TABLE `users`');
			DB::statement('COMMIT');
		} catch(Exception $sql_exception){
			DB::statement('ROLLBACK');
		}
	}

}
