<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Expanse extends Model
{
    public function expanse_type()
    {
    	return $this->belongsTo(ExpanseType::class,'expanse_type_id','id');
    }
}
