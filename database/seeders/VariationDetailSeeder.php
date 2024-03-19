<?php

namespace Database\Seeders;

use App\Models\VariationDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariationDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VariationDetail::create(
          [
              'variation_id'=>'1',
              'price'=>'1581',
              'stock_quantity'=>'100',
              'status'=>'active',
          ]
        );
    }
}
