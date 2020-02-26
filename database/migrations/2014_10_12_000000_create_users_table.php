<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('real_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tel');
            $table->text('memo');
            $table->integer('item_count');
            $table->date('last_operation_date');
            $table->date('last_login_date');
            $table->string('a8_acount_id');
            $table->string('a8_acount_pass');
            $table->boolean('restriction_flag');
            $table->string('rakuten_acount_id')->nullable();
            $table->string('rakuten_acount_pass')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
