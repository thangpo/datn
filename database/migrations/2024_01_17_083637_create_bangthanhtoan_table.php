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
        Schema::create('bangthanhtoan', function (Blueprint $table) {
            $table->id();
            $table->string('users_id');
            $table->string('vexem_id');
            $table->string('lichtrinh_id');
            $table->string('profile_id');
            $table->string('soluongve');
            $table->string('tongtien');
            $table->string('pttt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bangthanhtoan');
    }
};
