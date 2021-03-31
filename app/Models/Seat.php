<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $guarded = [];

    public function match()
    {
        return $this->belongsTo(Match_::class);
    }
    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }

}
