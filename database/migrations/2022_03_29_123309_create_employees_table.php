<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('title',100);
            $table->string('gender',20);
            $table->string('office',5);
            $table->string('presence',20);
            $table->time('departureTime')->nullable();
            $table->time('returnTime')->nullable();
            $table->string('reason',100);
            $table->string('phone',20);
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
        Schema::dropIfExists('employees');
    }
};
