<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 👇 to set the 'id' column to have 'int(12)', you can use the //
        // unsignedBigInteger method and specify the desired length with the length attribute // 
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id', 12)->length(12)->autoIncrement();
            $table->string('email_address', 100)->unique();
            $table->string('password', 100);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->primary('id');
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
