<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamDetail extends Model
{
    protected $fillable = [
        'team_id', 'name', 'role', 'phone_number', 'email', 'image'
    ];

    public function team()
    {
       return $this->belongsTo('App\Team','team_id');
    }

    public function workshops() {
        return $this->belongsToMany(Workshop::class, 'team_has_workshop');
    }
}