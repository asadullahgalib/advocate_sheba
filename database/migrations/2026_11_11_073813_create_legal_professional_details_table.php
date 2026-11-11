<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalProfessionalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_professional_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('designation_id')->nullable();
            $table->string('icon')->nullable();
            $table->string('title')->nullable();
            $table->longText('sub_title')->nullable();
            $table->longText('description_en')->nullable();
            $table->integer('sort')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keyword')->nullable();
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
        Schema::dropIfExists('legal_professional_details');
    }
}
