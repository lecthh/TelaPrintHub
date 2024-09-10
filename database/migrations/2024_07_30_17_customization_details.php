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
        Schema::create('customization_details', function (Blueprint $table) {
            $table->string('customization_details_ID')->primary();
            $table->string('remarks');
            $table->unsignedBigInteger('sizes_ID');
            $table->string('name');
            $table->string('number')->nullable();
            $table->integer('quantity');
            $table->string('order_ID');
            $table->timestamps();

            $table->foreign('order_ID')->references('order_ID')->on('order')->onDelete('cascade');
            $table->foreign('sizes_ID')->references('sizes_ID')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customization_details');
    }
};
