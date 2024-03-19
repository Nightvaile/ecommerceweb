<?php

namespace Database\Seeders;

use App\Models\ProductVariation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductVariation::create(
            [
                'product_id'=>'1',
                'color_id'=>'1',
                'size_id'=>'3',

            ]
        );
    }
}
