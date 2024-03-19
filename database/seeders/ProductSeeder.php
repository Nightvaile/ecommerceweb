<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(
            [
                'product_name'=>'Kot Ceket',
                'description'=>'asd',
                'category_id'=>'2',
                'status'=>'active',
            ]
        );
    }
}
