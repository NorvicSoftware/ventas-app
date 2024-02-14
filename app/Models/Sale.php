<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sale extends Model
{
    use HasFactory;
    protected $table = "Sales";
    
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(product::class);
    }
    
}
