<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tasks', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->length(11)->autoIncrement();
            $table->unsignedBigInteger('user_id')->length(11);
            $table->unsignedBigInteger('task_id')->length(11);
            $table->timestamp('due_date');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->string('remarks', 100);
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tasks');
    }
}
