<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Programs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('user_id',false,true);
            $table->bigInteger('day_id',false,true)->nullable();
            $table->integer('day_of_week',false,true)->nullable();
            $table->time('time')->nullable();
            $table->string('describe')->nullable();
            $table->integer('week_kind')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');

            $table->index('user_id');
            $table->index('day_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
