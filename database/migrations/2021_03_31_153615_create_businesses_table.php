<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('address');
            $table->string('operator');
            $table->string('location');
            $table->string('contact_no');
            $table->string('landline');
            $table->date('permit_issued_date');
            $table->date('permit_expiration_date');
            $table->string('owner_full_name');
            $table->text('owner_address')->nullable();
            $table->text('owner_details')->nullable();
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
        Schema::dropIfExists('businesses');
    }
}
