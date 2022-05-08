<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'username', 'password', 'is_admin'
    ];

    protected $hidden = [
        'password',
    ];

    public function team(){
        return $this->hasMany(Team::class);
    }
}
