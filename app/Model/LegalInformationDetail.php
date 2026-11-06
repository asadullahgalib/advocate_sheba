<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LegalInformationDetail extends Model
{
    protected $table = 'legal_information_details';

    public function legalInformation()
    {
        return $this->belongsTo('App\Model\LegalInformation', 'legal_information_id');
    }
}
