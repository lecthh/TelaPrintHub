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
        Schema::create('order_designs_confirmed', function (Blueprint $table) {
            $table->id();
            $table->string('order_ID');
            $table->string('file_path');
            $table->timestamps();

            $table->foreign('order_ID')->references('order_ID')->on('order')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_designs_confirmed');
    }
};
