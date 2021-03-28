<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function tests() 
    {
        return $this->hasMany(Test::class);
    }
}
