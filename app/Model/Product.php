<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function medicine_category(){
        return $this->belongsTo(MedicineCategory::class,'medicine_category_id','id');
    }
}
