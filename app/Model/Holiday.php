<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    public function holiday_name(){
        return $this->belongsTo(HolidayName::class,'holiday_name_id','id');
    }
}
