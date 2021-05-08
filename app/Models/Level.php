<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function users() 
    {
        return $this->hasMany(User::class);
    }

    public function rounds() 
    {
        return $this->hasMany(Round::class);
    }
}
