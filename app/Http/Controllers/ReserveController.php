<?php

namespace App\Http\Controllers;
use App\Models\Stadium;
use App\Models\Match;
use App\Models\Seat;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Auth;

class ReserveController extends Controller
{
    //
    public function store($seatId)
    {
        $seat = Seat::find($seatId);
        if($seat->free == false)
        {
            echo '<script type="text/javascript">alert("This Seat seems to be arleady reserved, Please choose another seat")</script>';
        }
        else{
        auth()->user()->reservations()->create([
            'seat_id' => $seat->id,
            'match__id' => $seat->match_->id,

        ]);
        $seat->update([
            'free'=>false,
        ]);

        return view('matches.success')->with (['seat' => $seat]);
        }
      
    }
    public function getall()
    {
        $reserve = Reservation::where('user_id',Auth::user()->id)->get();
        return view('layouts.reserve')->with (['reservations' => $reserve]);
    }
}
