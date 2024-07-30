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
        Schema::create('product', function (Blueprint $table) {
            $table->string('product_ID')->primary();
            $table->string('designer_ID');
            $table->string('apparel_category_ID');
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->decimal('pricing', 10, 2);
            $table->timestamps();

            $table->foreign('designer_ID')->references('designer_ID')->on('designer_company');
            $table->foreign('apparel_category_ID')->references('apparel_category_ID')->on('apparel_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
