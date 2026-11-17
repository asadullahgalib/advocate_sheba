<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LawFirm extends Model
{
    protected $table = 'law_firms';
    protected $guarded = [];

    // Relation with User (Leader)
    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id', 'id');
    }

    // Relation with District
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
}