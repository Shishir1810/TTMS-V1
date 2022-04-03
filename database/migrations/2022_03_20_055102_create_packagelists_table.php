<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packagelists', function (Blueprint $table) {
            $table->id();
            $table->string('packagelist_name');
            $table->string('packagelist_place');
            $table->string('packagelist_hotel');
            $table->string('packagelist_transport');
            $table->string('packagelist_type');
            $table->double('packagelist_cost');
            $table->double('packagelist_person');
            $table->date('packagelist_date');
            
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
        Schema::dropIfExists('packagelists');
    }
}
