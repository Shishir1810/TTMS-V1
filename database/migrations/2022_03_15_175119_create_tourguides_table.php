<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourguidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourguides', function (Blueprint $table) {
            $table->id();
            $table->string('tourguide_name');
            $table->double('tourguide_phone')->unique();
            $table->string('tourguide_email')->unique();
            $table->string('tourguide_address');
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
        Schema::dropIfExists('tourguides');
    }
}
