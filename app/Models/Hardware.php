<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;
    protected $fillable = ['name','type','os','cpu','gpu','storage','ram','price'];
    public $timestamps = false;
}
