<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\Division;
use App\Model\District;
use App\Model\Upazila;
use App\Model\Union;
use App\Model\Role;
use App\Model\Designation;
use App\Model\Department;
use App\Model\Religion;
use App\Model\SalaryType;
use App\Model\AccountType;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_role(){
        return $this->belongsTo(Role::class,'role','id');
    }

    public function division(){
        return $this->belongsTo(Division::class, 'division_id','id');
    }

    public function district(){
        return $this->belongsTo(District::class, 'district_id','id');
    }

    public function upazila(){
        return $this->belongsTo(Upazila::class, 'upazila_id','id');
    }

    public function union(){
        return $this->belongsTo(Union::class, 'union_id','id');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','id');
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class,'religion_id','id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function salary_type()
    {
        return $this->belongsTo(SalaryType::class,'salary_type_id','id');
    }

    public function account_type()
    {
        return $this->belongsTo(AccountType::class,'account_type_id','id');
    }
}
