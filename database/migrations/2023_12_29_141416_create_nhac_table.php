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
        Schema::create('nhac', function (Blueprint $table) {
            $table->id();
            $table->string('nhomnhac_id');
            $table->string('tenn');
            $table->string('anh');
            $table->string('nhac');
            $table->string('loainhac');
            $table->string('tacgia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhac');
    }
};
