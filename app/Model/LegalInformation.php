<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LegalInformation extends Model
{
    public function details()
    {
        return $this->hasMany('App\Model\LegalInformationDetail', 'legal_information_id')
            ->orderBy('serial', 'asc');
    }
}