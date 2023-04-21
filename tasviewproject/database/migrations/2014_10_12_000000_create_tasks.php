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
            $table->name('name');
            $table->description('description');
            $table->due_date('due_date');
            $table->start_time('start_time');
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
        Schema::dropIfExists('task');
    }
}
