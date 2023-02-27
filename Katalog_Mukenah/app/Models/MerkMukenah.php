<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkMukenah extends Model
{
    use HasFactory;
    protected $connection='mysql';    
    protected $table='merk_mukenah';
    protected $primaryKey='merk_id';
    protected $fillable=['merk_id', 'merk_nama'];
    
    public function RincianProduk()
    {
        return $this->hasMany( 'App\Models\RincianProduk', 'merk_id');
    }
}
