<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('timer_days_id')->unsigned()->nullable();
            $table->foreign('timer_days_id')->references('id')->on('timer_days')->onDelete('cascade');
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->enum('level', ['job','lunch','time_break']);
            $table->boolean('status')->default(false);
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timer');
    }
}
