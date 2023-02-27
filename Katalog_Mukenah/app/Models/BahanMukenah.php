<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanMukenah extends Model
{
    use HasFactory;
    protected $connection='mysql';    
    protected $table='bahan_mukenah';
    protected $primaryKey='bahan_id';
    protected $fillable=['bahan_id', 'bahan', 'keterangan'];
    //protected $guarded = [''];

    public function RincianProduk()
    {
        return $this->hasMany( 'App\Models\RincianProduk', 'bahan_id');
    }
}
