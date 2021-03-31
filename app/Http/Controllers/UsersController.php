<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('type',1)->orWhere('type',0)->get();
        return view('admin.users')->with (['users' => $users]);
    }
}