<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    protected $fillable = ['first','last','email','phone', 'hardware_id',];
    public $timestamps = false;
    
}

function hardwarew(){
    return $this->hasMany(Hardware::class);
}
