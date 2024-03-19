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
        Schema::create('variation_details', function (Blueprint $table) {
            $table->id('vdetails_ID');
            $table->unsignedBigInteger('variation_id');
            $table->decimal('price', 10, 2)->default('0');
            $table->unsignedInteger('stock_quantity')->default('0');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamps();

            $table->foreign('variation_id')->references('variation_ID')->on('product_variations')
                ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variation_details');
    }
};
