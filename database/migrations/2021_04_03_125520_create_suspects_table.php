<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspects', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('citizenship')->nullable();
            $table->string('gender');
            $table->date('date_of_birth')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_no')->nullable();;
            $table->string('address')->nullable();
            $table->string('work_address')->nullable();
            $table->string('with_previous_criminal_records')->nullable();
            $table->string('previous_case_status')->nullable();
            $table->string('relation_to_victim')->nullable();
            $table->string('description')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('suspects');
    }
}
