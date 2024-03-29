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
    
    public function changetype($id)
    {
        $user = User::find($id);
        $user->type = 1-$user->type;
        $user->save();
        return response()->json([
            'success' => 'Record has been deleted successfully!',
            'type' => $user->type
        ]);
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }
}