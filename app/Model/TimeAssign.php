<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TimeAssign extends Model
{
    public function time(){
        return $this->belongsTo(Time::class,'time_id','id');
    }

    public function day(){
        return $this->belongsTo(Day::class,'day_id','id');
    }
}
