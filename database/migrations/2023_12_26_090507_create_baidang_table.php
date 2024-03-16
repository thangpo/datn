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
        Schema::create('baidang', function (Blueprint $table) {
            $table->id();
            $table->string('users_id');
            $table->string('noidung');
            $table->string('anhbd');
            $table->integer('view_count')->default(0);
            $table->string('like');
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baidang');
    }
};
