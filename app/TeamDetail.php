<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamDetail extends Model
{
    protected $fillable = [
        'team_id', 'name', 'role', 'phone_number', 'email', 'image'
    ];
}
