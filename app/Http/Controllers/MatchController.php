<?php

namespace App\Http\Controllers;
use App\Models\Stadium;
use App\Models\Match_;
use App\Models\Seat;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    //
    public function create()
    {
        $stadiums = Stadium::all();
        return view('matches.create',compact('stadiums'));
    }

    public function index()
    {
        $matches = Match_::all();
        return view('matches.index',compact('matches'));
    }

    public function show($m)
    {

       $match = Match_::find($m);
        return view('matches.shows',compact('match'));
    }

    public function showEdit($m)
    {

        $stadiums = Stadium::all();
       $m = Match_::find($m);
        return view('matches.edit',compact('m','stadiums'));
    }
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'homeTeam' => 'required',
            'awayTeam' => 'required',
            'referee' => 'required',
            'linesman1' => 'required',
            'linesman2' => 'required',
            'date' => 'required',
            'stadium_id'=>'required',


        ]);
        $match = Match_::create($data);

        $stad = Stadium::find($request->stadium_id);
        $seatsTot = ($stad->rows)*($stad->columns);
        for($i = 1; $i<=$seatsTot; $i++)
        {
           $match->seats()->create([
                'seat_number' => $i,


   
            ]);

        }
   
 
    }

    public function edit(Request $request, $m)
    {
        $match = Match_::find($m);

        $match->homeTeam = request('homeTeam');
        $match->awayTeam = request('awayTeam');
        $match->referee = request('referee');
        $match->linesman1 = request('linesman1');
        $match->linesman2 = request('linesman2');
        $match->date = request('date');
        $match->stadium_id = request('stadium_id');


        $match->save();
        return back();
    }




}
