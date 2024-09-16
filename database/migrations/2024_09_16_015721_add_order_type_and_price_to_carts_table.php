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
        Schema::table('carts', function (Blueprint $table) {
            $table->string('order_type')->after('description');
            $table->decimal('price', 8, 2)->after('order_type');
            $table->integer('estimated_quantity')->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('order_type');
            $table->dropColumn('price');
            $table->dropColumn('estimated_quantity');
        });
    }
};