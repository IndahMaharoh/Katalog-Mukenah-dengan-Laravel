<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $connection='mysql';    
    protected $table='asal';
    protected $primaryKey='asal_id';
    protected $fillable=['asal_id', 'kota_asal'];
    //protected $guarded = [''];

    public function RincianProduk()
    {
        return $this->hasMany( 'App\Models\RincianProduk', 'asal_id');
    }
}
