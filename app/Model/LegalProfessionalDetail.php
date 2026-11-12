<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LegalProfessionalDetail extends Model
{
    protected $table = 'legal_professional_details';

    protected $guarded = [];

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id', 'id');
    }
}