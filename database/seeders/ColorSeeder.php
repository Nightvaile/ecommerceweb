<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::create(
            [
                'color_name'=>'Mavi',
            ]
        );
        Color::create(
            [
                'color_name'=>'Siyah',
            ]
        );
        Color::create(
            [
                'color_name'=>'Beyaz',
            ]
        );
        Color::create(
            [
                'color_name'=>'Gri',
            ]
        );
    }
}
