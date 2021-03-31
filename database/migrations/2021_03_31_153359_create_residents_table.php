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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->text('address');
            $table->string('gender');
            $table->string('mobile_no');
            $table->string('landine')->nullable();
            $table->string('email')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('place_of_birth')->nullable();
            $table->string('occupation')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('civil_status');
            $table->integer('active')->default(1);
            $table->string('is_voter')->default(false);
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
