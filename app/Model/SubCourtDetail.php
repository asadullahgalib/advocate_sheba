<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCourtDetail extends Model
{
    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id', 'id');
    }

    public function subCourt()
    {
        return $this->belongsTo(SubCourt::class, 'sub_court_id', 'id');
    }
}