<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //To make relationship between product and category
    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
    
    public function product()
    {
        return $this->hasOne('App\product');
    }
    public function getPrice(){
         $price= $this->price / 100;
         return number_format($price, 2, ',', ' ') . ' DA';
     }
}