<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    protected $fillable = ['first','last','email','phone', 'orders_id','hardware_id',];
    public $timestamps = false;
    
}

function hardware(){
    return $this->hasMany(Hardware::class);
}

function orders(){
    return $this->hasMany(Order::class);
}