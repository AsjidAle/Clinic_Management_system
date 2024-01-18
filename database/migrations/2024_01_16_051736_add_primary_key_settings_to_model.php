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
        Schema::table('treatment', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement()->change();
        });

        Schema::table('patient_queue', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement()->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('treatment', function (Blueprint $table) {
            //
        });
    }
};
