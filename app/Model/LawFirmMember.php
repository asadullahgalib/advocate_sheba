<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class LawFirmMember extends Model
{
    protected $table = 'law_firm_members';
    protected $guarded = [];

    // অ্যাডভোকেটের (User) সাথে রিলেশন
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // ল ফার্মের সাথে রিলেশন
    public function lawFirm()
    {
        return $this->belongsTo(LawFirm::class, 'law_firm_id', 'id');
    }
}