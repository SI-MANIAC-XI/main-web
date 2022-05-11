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
   // Relasi 1-1
   public function team()
   {
      return $this->hasOne('App\Team', 'account_id', 'id');
   }
}