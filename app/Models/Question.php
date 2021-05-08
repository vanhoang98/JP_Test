<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'test_id',
        'content',
        'answer_a',
        'answer_b',
        'answer_c',
        'answer_d',
        'answer',
        'image'
    ];

    public function test() 
    {
        return $this->belongsTo(Test::class);
    }
}
