<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdvocatePracticeArea extends Model
{
    protected $table = 'advocate_practice_areas';
    protected $guarded = [];

    public function practice()
    {
        return $this->belongsTo(Practice::class, 'practice_id', 'id');
    }
}