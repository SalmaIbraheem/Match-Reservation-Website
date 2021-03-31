<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $guarded = [];
    public function matches()
    {
        return $this->hasMany(Match_::class);
    }
}
