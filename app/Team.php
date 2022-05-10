<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = [
      'account_id', 'team_name', 'school_name'
   ];

   public function teamDetail()
   {
      return $this->hasMany('App\TeamDetail','team_id','id');
   }
}