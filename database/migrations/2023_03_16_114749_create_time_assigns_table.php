<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeAssignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_assigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('doctor_id')->nullable()->comment('doctor_id=user_id');
            $table->integer('day_id')->nullable();
            $table->integer('time_id')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('time_assigns');
    }
}
