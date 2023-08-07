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
        Schema::table('vehicles_details', function (Blueprint $table) {
            $table->string('plate_no');
            $table->string('engine_capacity');
            $table->string('year_of_manufacture');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles_details', function (Blueprint $table) {
            //
        });
    }
};
