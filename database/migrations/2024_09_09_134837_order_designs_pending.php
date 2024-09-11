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
        Schema::create('order_designs_pending', function (Blueprint $table) {
            $table->id();
            $table->string('order_placement_ID');
            $table->string('file_path');
            $table->timestamps();

            $table->foreign('order_placement_ID')->references('order_placement_ID')->on('order_placement')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_designs_pending');
    }
};
