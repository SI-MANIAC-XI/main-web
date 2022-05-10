<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
   protected $fillable = [
      'username', 'password', 'is_admin'
   ];

   protected $hidden = [
      'password',
   ];

   public function team()
   {
      return $this->hasMany('App\Team', 'account_id', 'id');
   }
}