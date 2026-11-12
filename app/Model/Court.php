<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    // SubCourt এর সাথে one-to-many relation
    public function subCourts()
    {
        return $this->hasMany(SubCourt::class, 'court_id', 'id');
    }
}