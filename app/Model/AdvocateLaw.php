<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdvocateLaw extends Model
{
    protected $table = 'advocate_laws';
    protected $guarded = [];

    public function law()
    {
        return $this->belongsTo(Law::class, 'law_id', 'id');
    }
}