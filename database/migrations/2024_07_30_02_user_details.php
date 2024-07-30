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
        Schema::create('user_details', function (Blueprint $table) {
            $table->string('user_details_ID')->primary();
            $table->string('preferred_communication_ID')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('contact_information')->nullable();
            $table->timestamps();

            $table->foreign('preferred_communication_ID')->references('preferred_communication_ID')->on('preferred_communication');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
