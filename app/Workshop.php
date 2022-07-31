<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Workshop extends Model
{
    public function teamDetails() {
        return $this->belongsToMany(TeamDetail::class, 'team_has_workshop');
    }
}
