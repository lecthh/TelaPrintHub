<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('preferred_communication', function (Blueprint $table) {
            $table->string('preferred_communication_ID')->primary();
            $table->string('name');
        });

        Schema::create('user_details', function (Blueprint $table) {
            $table->string('user_details_ID')->primary();
            $table->string('preferred_communication_ID')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('contact_information')->nullable();

            $table->foreign('preferred_communication_ID')->references('preferred_communication_ID')->on('preferred_communication');
        });

        Schema::create('admin_type', function (Blueprint $table) {
            $table->string('admin_type_ID')->primary();
            $table->string('admin_type_name');
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->string('admin_ID')->primary();
            $table->string('admin_type_ID');
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->string('contact_information')->nullable();

            $table->foreign('admin_type_ID')->references('admin_type_ID')->on('admin_type');
        });

        Schema::create('designer_company', function (Blueprint $table) {
            $table->string('designer_ID')->primary();
            $table->string('admin_ID');
            $table->text('description');
            $table->string('logo')->nullable();
            $table->string('contact_details')->nullable();
            $table->string('email');

            $table->foreign('admin_ID')->references('admin_ID')->on('admin');
        });

        Schema::create('production_company', function (Blueprint $table) {
            $table->string('production_ID')->primary();
            $table->string('admin_ID');
            $table->text('description');
            $table->string('logo')->nullable();
            $table->string('contact_details')->nullable();
            $table->string('email');

            $table->foreign('admin_ID')->references('admin_ID')->on('admin');
        });

        Schema::create('apparel_category', function (Blueprint $table) {
            $table->string('apparel_category_ID')->primary();
            $table->string('name');
        });

        Schema::create('product', function (Blueprint $table) {
            $table->string('product_ID')->primary();
            $table->string('designer_ID');
            $table->string('apparel_category_ID');
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->decimal('pricing', 10, 2);

            $table->foreign('designer_ID')->references('designer_ID')->on('designer_company');
            $table->foreign('apparel_category_ID')->references('apparel_category_ID')->on('apparel_category');
        });

        Schema::create('order_status_type', function (Blueprint $table) {
            $table->string('order_status_ID')->primary();
            $table->string('name');
        });

        Schema::create('sizes', function (Blueprint $table) {
            $table->string('sizes_ID')->primary();
            $table->string('name');
        });

        Schema::create('customization_details', function (Blueprint $table) {
            $table->string('customization_details_ID')->primary();
            $table->text('description');
            $table->string('sizes_ID')->nullable();
            $table->string('name');
            $table->string('number')->nullable();
            $table->integer('quantity');

            $table->foreign('sizes_ID')->references('sizes_ID')->on('sizes');
        });

        Schema::create('print_type', function (Blueprint $table) {
            $table->string('print_type_ID')->primary();
            $table->string('name');
        });

        Schema::create('order_confirmation', function (Blueprint $table) {
            $table->string('order_confirmation_ID')->primary();
            $table->dateTime('confirmation_date');
        });

        Schema::create('order_placement_status', function (Blueprint $table) {
            $table->string('order_placement_status_ID')->primary();
            $table->string('name');
            $table->text('description');
        });

        Schema::create('order', function (Blueprint $table) {
            $table->string('order_ID')->primary();
            $table->string('user_details_ID');
            $table->string('designer_ID');
            $table->string('production_ID');
            $table->string('order_confirmation_ID');
            $table->string('order_status_ID');
            $table->string('apparel_category_ID');
            $table->string('customization_details_ID');
            $table->string('print_type_ID');
            $table->dateTime('estimated_delivery_date');
            $table->dateTime('order_date');
            $table->string('tracking_number')->nullable();

            $table->foreign('user_details_ID')->references('user_details_ID')->on('user_details');
            $table->foreign('designer_ID')->references('designer_ID')->on('designer_company');
            $table->foreign('production_ID')->references('production_ID')->on('production_company');
            $table->foreign('order_confirmation_ID')->references('order_confirmation_ID')->on('order_confirmation');
            $table->foreign('order_status_ID')->references('order_status_ID')->on('order_status_type');
            $table->foreign('apparel_category_ID')->references('apparel_category_ID')->on('apparel_category');
            $table->foreign('customization_details_ID')->references('customization_details_ID')->on('customization_details');
            $table->foreign('print_type_ID')->references('print_type_ID')->on('print_type');
        });

        Schema::create('order_placement', function (Blueprint $table) {
            $table->string('order_placement_ID')->primary();
            $table->string('user_details_ID');
            $table->string('order_ID');
            $table->string('order_placement_status_ID');
            $table->dateTime('placement_date');

            $table->foreign('user_details_ID')->references('user_details_ID')->on('user_details');
            $table->foreign('order_ID')->references('order_ID')->on('order');
            $table->foreign('order_placement_status_ID')->references('order_placement_status_ID')->on('order_placement_status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_placement');
        Schema::dropIfExists('order');
        Schema::dropIfExists('order_placement_status');
        Schema::dropIfExists('order_confirmation');
        Schema::dropIfExists('print_type');
        Schema::dropIfExists('customization_details');
        Schema::dropIfExists('sizes');
        Schema::dropIfExists('order_status_type');
        Schema::dropIfExists('product');
        Schema::dropIfExists('apparel_category');
        Schema::dropIfExists('production_company');
        Schema::dropIfExists('designer_company');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('admin_type');
        Schema::dropIfExists('user_details');
        Schema::dropIfExists('preferred_communication');
    }
};
