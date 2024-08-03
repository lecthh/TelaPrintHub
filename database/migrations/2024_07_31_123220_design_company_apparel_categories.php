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
        Schema::create('designer_company_apparel_category', function (Blueprint $table) {
            $table->id();
            $table->string('designer_ID');
            $table->unsignedBigInteger('apparel_category_ID');

            $table->foreign('designer_ID')->references('designer_ID')->on('designer_company')->onDelete('cascade');
            $table->foreign('apparel_category_ID')->references('apparel_category_ID')->on('apparel_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designer_company_apparel_category');
    }
};
