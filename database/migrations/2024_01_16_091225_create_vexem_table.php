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
        Schema::create('vexem', function (Blueprint $table) {
            $table->id();
            $table->string('lichtrinh_id');
            $table->string('tenve');
            $table->string('giave');
            $table->string('soluong');
            $table->string('loaighe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vexem');
    }
};
