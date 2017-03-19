<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('arrival')->nullable();
            $table->string('departure')->nullable();
            $table->string('firstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('adress')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('web_reservations');
    }
}
