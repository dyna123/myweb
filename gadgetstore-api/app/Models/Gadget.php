<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'image', 'price', 'weight', 'stock', 'status'];

}
