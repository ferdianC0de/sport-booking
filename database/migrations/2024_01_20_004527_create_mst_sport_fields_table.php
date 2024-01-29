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
        Schema::create('mst_sport_fields', function (Blueprint $table) {
            $table->string('sport_field')->primary();
            $table->string('cd_sport_center')->references('cd_sport_center')->on('mst_sport_centers');
            $table->string('cd_sport_type')->references('cd_sport_type')->on('mst_sport_types');
            $table->string('thumbnail');
            $table->text('images');
            $table->text('description');

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
        Schema::dropIfExists('mst_sport_fields');
    }
};