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

// Relation with District (ভবিষ্যতের জন্য রাখ|হলো)
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    // Relation with Gallery (নতুন যোগ করা হলো)
    public function galleries()
    {
        return $this->hasMany(LawFirmGallery::class, 'law_firm_id', 'id');
    }
}