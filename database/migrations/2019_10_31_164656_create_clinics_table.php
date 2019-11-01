<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->bigIncrements('clinic_id');
            $table->string('clinic_name');
            $table->text('clinic_details');
            $table->string('clinic_location');
            $table->string('clinic_ownerName');
            $table->string('clinic_contactNumber');
            $table->string('clinic_appointmentFee');
            $table->string('clinic_initialDeposit');
            $table->string('clinic_picture');
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
        Schema::dropIfExists('clinics');
    }
}
