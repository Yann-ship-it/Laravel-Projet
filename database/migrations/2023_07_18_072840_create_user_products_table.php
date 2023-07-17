<?php

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_products', function (Blueprint $table) {

            $table->foreignId('product_id')->nullable();

            $table->foreignId('user_id')->nullable();

            // $table->unsignedBigInteger('user_id')->defaut(1);
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_products');
    }
};
