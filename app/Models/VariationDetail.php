<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationDetail extends Model
{
    use HasFactory;

    protected $fillable=(
      [
          'variation_id',
          'price',
          'stock_quantity',
          'status',
      ]
    );
}
