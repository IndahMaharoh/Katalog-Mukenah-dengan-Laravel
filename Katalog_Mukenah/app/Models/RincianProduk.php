<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class RincianProduk extends Model
{
    use HasFactory;
    protected $connection='mysql';    
    protected $table='rincian_produk';
    protected $primaryKey='produk_id';
    protected $fillable=['produk_id', 'gambar_produk', 'nama_produk', 'merk_id', 
                         'bahan_id', 'harga', 'nama_toko', 'asal_id', 'rating',
                         'link', 'penjelasan'
                        ];
    
}
