<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table='stocks';
    protected $fillable=['product_id','vlera_e_stokut'];

    
    public function product(){
        return $this->hasOne('App\Product');
    }
    
}

