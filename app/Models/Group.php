<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';

    public function clients () : BelongsToMany{
        return $this->belongsToMany(Client::class);
    }

    protected $fillable = [
        'type',
    ];
}


