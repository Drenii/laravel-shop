<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table='sales';
    protected $fillable=['nr_produkteve_te_shitura','product_id'];

    public function product_sale(){
        return $this->hasOne('App\Product');
    }
}
