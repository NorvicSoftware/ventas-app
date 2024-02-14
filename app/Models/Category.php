<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
useIlluminate\Database\Eloquent\Relations\HasMany

class Category extends Model
{
    use HasFactory;
    protected $table = "Category";
    
    public funtion products () : HasMany{
	returns $this->HasMany(Products ::class);
}
}
