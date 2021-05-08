<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'round_id',
        'type_id'
    ];

    public function round() 
    {
        return $this->belongsTo(Round::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function results() 
    {
        return $this->hasMany(Result::class);
    }

    public function questions() 
    {
        return $this->hasMany(Question::class);
    }
}
