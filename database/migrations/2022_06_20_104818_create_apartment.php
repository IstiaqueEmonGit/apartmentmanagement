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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('society_name');
            $table->string('apartment_name')->unique();
            $table->integer('apartment_no')->unique();
            $table->string('address');
            $table->integer('owners')->nullable();
            $table->integer('tenants')->nullable();
            $table->integer('flats')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartment');
    }
};
