<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazilla extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'division_id', 'district_id'];

    public function divison()
    {
        return $this->belongsTo(Divison::class, 'division_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    // public function postoffices()
    // {
    //     return $this->hasMany(PostOffice::class);
    // }
}
