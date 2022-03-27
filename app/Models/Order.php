<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['invoice','date', 'buyer_id', 'hardware_id'];
    public $timestamps = false;
}

function hardwarew(){
    return $this->hasMany(Hardware::class);
}

function buyer(){
    return $this->belongsTo(Buyer::class);
}