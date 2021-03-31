<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditController extends Controller
{
    public function index()
    {
        return view('auth.Edit');
    }
    // To update an existing user (load to edit)
    public function edit(Request $request,$id)
    {
        $user = User::find($id);

        $user->name = request('name');
        $user->email = request('email');
        $user->city = request('city');
        //$user->password = bcrypt(request('password'));

        $user->save();
        return back();
    }

}