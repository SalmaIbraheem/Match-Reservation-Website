<?php

namespace App\Http\Controllers;
use App\Models\Stadium;
use App\Models\Match;
use App\Models\Seat;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    //
    public function store($seatId)
    {
        $seat = Seat::find($seatId);
 
        auth()->user()->reservations()->create([
            'seat_id' => $seat->id,
            'match_id' => $seat->match->id,


        ]);
        $seat->update([
            'free'=>false,
        ]);

        return $seat->seat_number;
      
    }
}
