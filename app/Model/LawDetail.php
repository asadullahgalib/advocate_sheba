<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LawDetail extends Model
{
    protected $table = 'law_details';

    public function law()
    {
        return $this->belongsTo(Law::class, 'law_id', 'id');
    }
}