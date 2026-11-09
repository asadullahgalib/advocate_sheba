<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AddPosition extends Model
{
    protected $table = 'add_positions';

    public function adds(){
        return $this->hasMany(Adds::class, 'add_position_id', 'id');
    }
}