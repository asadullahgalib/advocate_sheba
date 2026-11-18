<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LawFirmGallery extends Model
{
    protected $table = 'law_firm_galleries';
    protected $guarded = [];

    // ল ফার্মের সাথে রিলেশন
    public function lawFirm()
    {
        return $this->belongsTo(LawFirm::class, 'law_firm_id', 'id');
    }
}