<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function law()
    {
        return $this->belongsTo(Law::class,'law_id','id');
    }
}
