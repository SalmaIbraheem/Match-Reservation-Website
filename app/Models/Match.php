<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $guarded = [];
    
    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }
    public function reserves()
    {
        return $this->hasMany(Reseravation::class);
    }
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
