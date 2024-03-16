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
        Schema::create('nhomnhac', function (Blueprint $table) {
            $table->id();
            $table->string('tennn');
            $table->string('logonn');
            $table->string('sltv');
            $table->string('ngaytl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_nhomnhac');
    }
};
