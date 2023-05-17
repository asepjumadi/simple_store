<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukVariant extends Model
{
    use HasFactory;
    protected $protected =[
        'produk_id','color_id','size_id','price'
    ];
    protected $table='produk_varaint';
}
