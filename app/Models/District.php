<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'division_id'];

    public function divison()
    {
        return $this->belongsTo(Divison::class, 'division_id');
    }

    // public function upazillas()
    // {
    //     return $this->hasMany(Upazilla::class);
    // }
}
