<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->char('station_id', 8)->unique();
            $table->string('name', 50);
            $table->unsignedInteger('wmo_id');
            $table->dateTime('begin_date');
            $table->dateTime('end_date');
            $table->unsignedInteger('latitude');
            $table->unsignedInteger('longitude');
            $table->decimal('gauss1', 10, 2);
            $table->decimal('gauss2', 10, 2);
            $table->decimal('geogr1', 10, 6);
            $table->decimal('geogr2', 10, 6);
            $table->decimal('elevation', 10, 2);
            $table->decimal('elevation_pressure', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stations');
    }
};
