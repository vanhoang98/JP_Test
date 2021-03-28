<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'level_id'
    ];

    public function level() 
    {
        return $this->belongsTo(Level::class);
    }

    public function tests() 
    {
        return $this->hasMany(Test::class);
    }
}
