<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('law_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('law_id')->nullable();
            $table->string('title_bn')->nullable();
            $table->string('title_en')->nullable();
            $table->longText('description_en')->nullable();
            $table->integer('serial')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('law_details');
    }
}
