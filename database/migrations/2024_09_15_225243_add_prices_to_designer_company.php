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
        Schema::table('designer_company', function (Blueprint $table) {
            $table->decimal('tshirt_price', 8, 2)->nullable();
            $table->decimal('hoodie_price', 8, 2)->nullable();
            $table->decimal('poloshirt_price', 8, 2)->nullable();
            $table->decimal('shorts_price', 8, 2)->nullable();
            $table->decimal('sportswear_price', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('designer_company', function (Blueprint $table) {
            $table->dropColumn('tshirt_price');
            $table->dropColumn('hoodie_price');
            $table->dropColumn('poloshirt_price');
            $table->dropColumn('shorts_price');
            $table->dropColumn('sportswear_price');
        });
    }
};