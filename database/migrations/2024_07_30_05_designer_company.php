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
        Schema::create('designer_company', function (Blueprint $table) {
            $table->string('designer_ID')->primary();
            $table->string('admin_ID');
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('contact_details')->nullable();
            $table->string('email');
            $table->boolean('is_verified')->default(false);
            $table->timestamps();

            $table->foreign('admin_ID')->references('admin_ID')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designer_company');
    }
};
