<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('doctor_id')->nullable()->comment('doctor_id=user_id');
            $table->integer('time_id')->nullable();
            $table->date('date')->nullable();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('fee_type')->nullable();
            $table->string('image')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('bkash_number')->nullable();
            $table->string('bkash_transaction_id')->nullable();
            $table->string('rocket_number')->nullable();
            $table->string('rocket_transaction_id')->nullable();
            $table->string('nagad_number')->nullable();
            $table->string('nagad_transaction_id')->nullable();
            $table->string('code')->nullable();
            $table->string('amount')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('doctor_bookings');
    }
}
