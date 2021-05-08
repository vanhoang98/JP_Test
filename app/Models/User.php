<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $fillable = [
        'email', 
        'password',
        'name',
        'date_of_birth',
        'slag',
        'address',
        'avatar',
        'level_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() 
    {
        return $this->belongsTo(Role::class);
    }

    public function results() 
    {
        return $this->hasMany(Result::class);
    }

    public function level() 
    {
        return $this->belongsTo(Level::class);
    }

    public function posts() 
    {
        return $this->hasMany(Post::class);
    }
}
