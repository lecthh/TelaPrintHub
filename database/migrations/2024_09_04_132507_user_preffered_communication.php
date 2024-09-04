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
        Schema::create('user_preferred_communication', function (Blueprint $table) {
            $table->string('user_details_ID');
            $table->unsignedBigInteger('preferred_communication_ID');

            $table->foreign('user_details_ID')->references('user_details_ID')->on('user_details')->onDelete('cascade');
            $table->foreign('preferred_communication_ID')->references('preferred_communication_type_ID')->on('preferred_communication_type')->onDelete('cascade');

            $table->primary(['user_details_ID', 'preferred_communication_ID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_preferred_communication');
    }
};
