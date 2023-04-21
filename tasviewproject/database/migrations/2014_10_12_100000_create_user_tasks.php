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
        Schema::create('users_task', function (Blueprint $table) {
            $table->id('id');
            $table->user_id('user_id');
            $table->task_id('task_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->due_date('due_date');
            $table->start_time('start_time');
            $table->end_time('end_time');
            $table->remarks('remarks');
            $table->status_id('status_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
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
        Schema::dropIfExists('users_task');
    }
}