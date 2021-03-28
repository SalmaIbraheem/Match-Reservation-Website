<?php

namespace App\Http\Controllers;
use App\Models\Stadium;
use App\Models\Match;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    //
    public function create()
    {
        $stadiums = Stadium::all();
        return view('matches.create',compact('stadiums'));
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
        Match::create($data);

        dd(request()->all());
    }

}
