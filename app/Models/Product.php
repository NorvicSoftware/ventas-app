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

    public function category () : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function sale () : BelongsTo {
        return $this->belongsTo(Sale::class);
    }

    public function location () : BelongsToMany {
        return $this->belongsToMany(Location::class);
    }
}
