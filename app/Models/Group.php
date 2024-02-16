<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';

    public function clients () : HasMany{
        return $this->hasMany(Client::class);
    }

    protected $fillable = [
        'type',
    ];
}