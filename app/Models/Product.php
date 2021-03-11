<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['emri','detajet_e_produktit','çmimi'];

    public function stock(){
        return $this->hasOne('App\Stock');
    }
    public function sale(){
        return $this->belongsTo('App\Sale');
    }
}

