<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class EditController extends Controller
{
    public function index()
    {
        return view('auth.Edit');
    }
    // To update an existing user (load to edit)
    public function edit(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->first = request('first');
        $user->last = request('last');
        $user->city = request('city');
        $user->address = request('address');
        $user->gender = request('gender');
        $user->bday = request('bday');
        if(request('password'))
        {
            $user->password = bcrypt(request('password'));
        }

        $user->save();
        return back();
    }

}