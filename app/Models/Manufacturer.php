<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $fillable = ['name','sales','tech, hardware_id'];
    public $timestamps = false;
}

function hardware(){
    return $this->hasMany(Hardware::class);
}