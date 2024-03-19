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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_ID');
            $table->string('product_name');
            $table->text('description');
            $table->unsignedBigInteger('category_id');
            $table->enum('status',['active','inactive']);
            $table->timestamps();

            $table->foreign('category_id')->references('category_ID')->on('categories')
                ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
