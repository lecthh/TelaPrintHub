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
        Schema::create('order_placement', function (Blueprint $table) {
            $table->string('order_placement_ID')->primary();
            $table->string('user_details_ID');
            $table->string('order_ID');
            $table->unsignedBigInteger('order_placement_status_ID');
            $table->string('order_design')->nullable();
            $table->timestamps();

            $table->foreign('user_details_ID')->references('user_details_ID')->on('user_details');
            $table->foreign('order_ID')->references('order_ID')->on('order');
            $table->foreign('order_placement_status_ID')->references('order_placement_status_ID')->on('order_placement_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_placement');
    }
};
