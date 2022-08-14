<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    public function jams()
    {
        return $this->belongsTo('App\Models\Jam', 'jamId');
    }

    public function jenispajaks()
    {
        return $this->belongsTo('App\Models\Jenispajak', 'jenisId');
    }

    public function jenislayanans()
    {
        return $this->belongsTo('App\Models\Jenislayanan', 'layananId');
    }

    public function metode()
    {
        return $this->belongsTo('App\Models\Metode');
    }

    public function carinomor()
    {
        return $this->belongsTo('App\Models\Carinomor');
    }
    protected $guarded = [];
}
