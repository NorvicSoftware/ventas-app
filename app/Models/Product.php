<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo
use Illuminate\Database\Eloquent\Relations\HasMany
    
class Product extends Model
{
    use HasFactory;
    protected $table = "Products";
    
    public funtion category () : BelongsTo{
	returns $this->BelongsTo(Category::class);
    }
    
    public funtion sales () : HasMany{
	returns $this->HasMany(Sale ::class);
}
    
}
