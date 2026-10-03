<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function position()
    {
        return $this->belongsTo(AddPosition::class, 'add_position_id', 'id');
    }
}
