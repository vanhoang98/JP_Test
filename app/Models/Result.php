<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'test_id',
        'point'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function test() 
    {
        return $this->belongsTo(Test::class);
    }
}
