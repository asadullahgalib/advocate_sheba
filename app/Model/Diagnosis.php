<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = 'designations';

    protected $guarded = [];

    public function legalProfessionalDetails()
    {
        return $this->hasMany(LegalProfessionalDetail::class, 'designation_id', 'id');
    }
}