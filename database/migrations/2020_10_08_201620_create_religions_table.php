<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReligionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });

        DB::table('religions')->insert([
            ['id'=>1,'name' => 'Islam'],
            ['id'=>2,'name' => 'Hindu'],
            ['id'=>3,'name' => 'Christian'],
            ['id'=>4,'name' => 'Buddhist'],
            ['id'=>5,'name' => 'Atheist'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('religions');
    }
}
