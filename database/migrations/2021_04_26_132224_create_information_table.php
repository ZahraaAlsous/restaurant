<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->Integer('phone_number');
            $table->string('facebook')->nullble();
            $table->string('instagram')->nullble();
            $table->string('email')->nullble();
            $table->string('location');
            $table->string('logo');
            $table->string('opening_days');
            $table->Integer('opening_time');
            $table->Integer('closing_time');
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
        Schema::dropIfExists('information');
    }
}
