<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('districts', function (Blueprint $table) {
            $table->string('image')->nullable()->after('name');
        });
    }

    public function down()
    {
        Schema::table('districts', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }

}
