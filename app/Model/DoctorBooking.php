<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class DoctorBooking extends Model
{
    public function time(){
        return $this->belongsTo(Time::class,'time_id','id');
    }

    public function doctor(){
        return $this->belongsTo(User::class,'doctor_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
