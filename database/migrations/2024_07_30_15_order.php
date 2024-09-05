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
        Schema::create('order', function (Blueprint $table) {
            $table->string('order_ID')->primary();
            $table->string('user_details_ID');
            $table->string('designer_ID');
            $table->string('production_ID')->nullable();
            $table->string('order_confirmation_ID')->nullable();
            $table->unsignedBigInteger('order_status_ID');
            $table->unsignedBigInteger('apparel_category_ID');
            $table->string('customization_details_ID')->nullable();
            $table->string('print_type_ID')->nullable();
            $table->dateTime('estimated_delivery_date')->nullable();
            $table->string('final_order_design')->nullable();
            $table->integer('price')->nullable();

            $table->timestamps();

            $table->foreign('user_details_ID')->references('user_details_ID')->on('user_details');
            $table->foreign('designer_ID')->references('designer_ID')->on('designer_company');
            $table->foreign('production_ID')->references('production_ID')->on('production_company');
            $table->foreign('order_confirmation_ID')->references('order_confirmation_ID')->on('order_confirmation');
            $table->foreign('order_status_ID')->references('order_status_ID')->on('order_status_type');
            $table->foreign('apparel_category_ID')->references('apparel_category_ID')->on('apparel_category');
            $table->foreign('print_type_ID')->references('print_type_ID')->on('print_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
