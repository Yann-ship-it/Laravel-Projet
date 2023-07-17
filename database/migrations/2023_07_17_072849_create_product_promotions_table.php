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
        Schema::create('product_promotions', function (Blueprint $table) {

            $table->foreignId('product_id')->nullable();

            $table->foreignId('promotion_id')->nullable();

            // $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->references('id')->on('products');
            
            // $table->unsignedBigInteger('promotion_id');
            // $table->foreign('promotion_id')->references('id')->on('promotions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_promotions');
    }
};
