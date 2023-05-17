<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukSize extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama_ukuran'
    ];
    protected $table='produk_size';
}
