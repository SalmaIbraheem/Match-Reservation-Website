<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match_ extends Model
{
    protected $guarded = [];
    
    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }
    public function reserves()
    {
        return $this->hasMany(Reservation::class);
    }
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
