<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    protected $table = 'adds';

    public function position(){
        return $this->belongsTo(AddPosition::class, 'add_position_id', 'id');
    }
}