<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostOffice extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'division_id', 'district_id', 'upazillas_id'];

    public function divison()
    {
        return $this->belongsTo(Divison::class, 'division_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function upazilla()
    {
        return $this->belongsTo(Upazilla::class, 'upazillas_id');
    }
}
