<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangayCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangay_cases', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('pending');
            $table->string('subject_person');
            $table->date('issued_date');
            $table->date('appearance_date');
            $table->time('time');
            $table->text('remarks')->nullable();
            $table->string('summon_purpose');
            $table->string('summon_body')->nullable();
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
        Schema::dropIfExists('barangay_cases');
    }
}
