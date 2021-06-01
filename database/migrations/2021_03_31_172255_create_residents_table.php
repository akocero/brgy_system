<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('active')->default(1);
            $table->string('image_path')->nullable();
            $table->unsignedInteger('household_id')->nullable();
            $table->unsignedInteger('purok_id')->nullable();
            // personal info 
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('nick_name')->nullable();
            $table->text('address');
            $table->string('gender');
            $table->string('spouse_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('resident_status')->nullable();
            $table->string('civil_status');
            $table->string('religion')->nullable();
            // contact info
            $table->string('mobile_no');
            $table->string('landline')->nullable();
            $table->string('email')->nullable();
            // voters info 
            $table->tinyInteger('is_voter')->default(0);
            $table->string('precinct_no')->nullable();
            // other info 
            $table->string('complexion')->nullable();
            $table->string('blood_type')->nullable();
            $table->text('remarks')->nullable();
            $table->tinyInteger('is_disabled')->default(0);
            // employment info
            $table->string('employment_status')->nullable();
            $table->string('occupation')->nullable();
            // educ info
            $table->string('educational_attainment')->nullable();
            // medical history
            $table->tinyInteger('covid_positive')->nullable();
            $table->tinyInteger('covid_symptoms')->nullable();
            $table->text('medical_remarks')->nullable();

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
        Schema::dropIfExists('residents');
    }
}
