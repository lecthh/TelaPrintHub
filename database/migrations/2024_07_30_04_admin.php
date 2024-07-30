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

        Schema::create('admin', function (Blueprint $table) {
            $table->string('admin_ID')->primary();
            $table->unsignedBigInteger('admin_type_ID');
            $table->string('name');
            $table->string('password')->nullable();
            $table->string('email');
            $table->boolean('is_verified')->default(false);
            $table->string('contact_information')->nullable();
            $table->timestamps();

            $table->foreign('admin_type_ID')->references('admin_type_ID')->on('admin_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
