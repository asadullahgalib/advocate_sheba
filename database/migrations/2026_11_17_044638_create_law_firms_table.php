<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawFirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('law_firms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('leader_id')->nullable()->comment('user_id=leader_id');
            $table->integer('district_id')->nullable();
            $table->string('firm_name')->nullable();
            $table->string('slug')->nullable();
            $table->text('court_name')->nullable();
            $table->string('established')->nullable();
            $table->longText('abouts')->nullable();
            $table->longText('membership')->nullable();
            $table->longText('practice')->nullable();
            $table->longText('training')->nullable();
            $table->longText('qualification')->nullable();
            $table->longText('chamber')->nullable();
            $table->longText('office_hour')->nullable();
            $table->longText('map')->nullable();
            $table->longText('social')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('law_firms');
    }
}
