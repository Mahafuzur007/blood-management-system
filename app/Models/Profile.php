<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function districts()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function divisons()
    {
        return $this->belongsTo(Divison::class, 'division_id');
    }

    public function postOffices()
    {
        return $this->belongsTo(PostOffice::class, 'post_office_id');
    }

    public function upazillas()
    {
        return $this->belongsTo(Upazilla::class, 'upazillas_id');
    }

    public function groups()
    {
        return $this->belongsTo(BloodGroup::class, 'blood_group_id');
    }
}
