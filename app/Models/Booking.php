<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function pengunjungId()
    {
        return $this->belongsTo('App\Models\Pengunjung');
    }
    protected $guarded = [];
}
