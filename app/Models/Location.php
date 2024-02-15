<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Location extends Model
{
    use HasFactory;
    protected $table = "locations";

    public function products(): BelongsToMany{
        return $this->BelongsToMany(Product::class);
    }
}
