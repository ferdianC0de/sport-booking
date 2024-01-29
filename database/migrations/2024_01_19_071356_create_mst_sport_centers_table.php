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
        Schema::create('mst_sport_centers', function (Blueprint $table) {
            $table->string('cd_sport_center')->primary();
            $table->string('name');
            $table->string('latitude')->nullable();
            $table->string('longtitude')->nullable();
            $table->text('address')->nullable();
            $table->string('contact')->nullable();

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
        Schema::dropIfExists('mst_sport_centers');
    }
};
