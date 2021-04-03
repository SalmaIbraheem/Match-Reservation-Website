<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
class ProfileController extends Controller
{
    public function index()
    {
        $reserve = Reservation::where('user_id',1)->get();
        return view('layouts.profile')->with (['reservations' => $reserve]);
    }
    public function delete($id)
    {
        $reserve = Reservation::find($id); 
        $seat = $reserve->seat;
        $seat->update([
            'free'=>true,
        ]);
        $reserve->delete(); 
        $seat->save();

        $reserve = Reservation::where('user_id',1)->get();
        return redirect()->route('profile')->with (['reservations' => $reserve]);
    }
}
