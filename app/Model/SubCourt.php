<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCourt extends Model
{
    // Court এর সাথে belongsTo relation
    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id', 'id');
    }
}