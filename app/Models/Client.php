<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $table = "clients";

    public function group () : BelongsTo{
        return $this->belongsTo(Group::class);
    }

    public function sales () : HasMany{
        return $this->hasMany(Sale::class);
    }
}
