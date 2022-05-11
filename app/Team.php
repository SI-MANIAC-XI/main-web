<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = [
      'account_id', 'team_name', 'school_name'
   ];
   //relasi 1-M
   public function teamDetail()
   {
      return $this->hasMany('App\TeamDetail','team_id','id');
   }
   //relasi 1-1
   public function account()
   {
      return $this->belongsTo('App\Account','account_id');
   }
}