<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slag',
        'description',
        'type',
    ];

    public function posts() 
    {
        return $this->hasMany(Post::class);
    }

    public function tests() 
    {
        return $this->hasMany(Test::class);
    }
}
