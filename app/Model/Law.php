<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    protected $table = 'laws';

    public function lawDetails()
    {
        return $this->hasMany(LawDetail::class, 'law_id', 'id');
    }
}