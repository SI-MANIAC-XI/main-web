<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'account_id', 'team_name', 'school_name'
    ];

    public function teamDetail(){
        return $this->hasMany(TeamDetail::class);
    }
}
