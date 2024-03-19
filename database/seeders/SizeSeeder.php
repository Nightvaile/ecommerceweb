<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::create(
            [
                'size_name'=>'S',
            ]
        );
        Size::create(
            [
                'size_name'=>'M',
            ]
        );
        Size::create(
            [
                'size_name'=>'L',
            ]
        );
        Size::create(
            [
                'size_name'=>'43',
            ]
        );
        Size::create(
            [
                'size_name'=>'44',
            ]
        );
    }
}
