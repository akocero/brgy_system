<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlottersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blotters', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('suspect_id');
            $table->unsignedInteger('victim_id');
            $table->unsignedInteger('reporter_id');
            $table->unsignedInteger('children_involved_id')->nullable();
            $table->string('blotter_entry_no');
            $table->string('status')->default('pending');
            $table->string('incident_type');
            $table->dateTime('reported_date_time');
            $table->string('incident_location');
            $table->dateTime('incident_date_time');
            $table->text('incident_details');
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
        Schema::dropIfExists('blotters');
    }
}
