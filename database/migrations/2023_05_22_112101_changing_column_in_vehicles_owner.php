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
        Schema::table('vehicles_owner', function (Blueprint $table) {
            $table->renameColumn('name', 'model');
            $table->renameColumn('phone', 'plate_no');
            $table->renameColumn('email', 'engine_capacity');
            $table->renameColumn('city', 'year_of_manufacture');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles_owner', function (Blueprint $table) {
            //
        });
    }
};
