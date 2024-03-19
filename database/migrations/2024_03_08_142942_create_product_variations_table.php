<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id('variation_ID');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('size_id');
            $table->timestamps();

            $table->foreign('product_id')->references('product_ID')->on('products')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('color_id')->references('color_ID')->on('colors')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('size_id')->references('size_ID')->on('sizes')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
