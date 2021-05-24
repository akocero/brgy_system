<?php

use App\Models\Purok;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuroksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puroks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('details');
            $table->timestamps();
        });

        Purok::create([
            "name" => "purok 1",
            "details" => "purok 1 Details",
        ]);

        Purok::create([
            "name" => "purok 2",
            "details" => "purok 2 Details",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puroks');
    }
}
