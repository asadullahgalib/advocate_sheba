<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdvocateLocation extends Model
{
    protected $table = 'advocate_locations';
    protected $guarded = [];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
}