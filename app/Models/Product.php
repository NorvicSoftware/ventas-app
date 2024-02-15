<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    public function category () : Belongsto{
        return $this->belongsto(Category::class);

    }
    public function locations(): BelongsToMany{
        return $this->belongsToMany(Location::class);
    }
}
