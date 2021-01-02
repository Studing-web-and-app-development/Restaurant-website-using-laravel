<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //To make relationship between order and user
    public function user()
    {
     return $this->belongsTo('App\Models\User');
    }
}