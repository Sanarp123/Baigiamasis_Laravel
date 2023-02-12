<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', ['users' => $users]);
    }

    public function destroy(user $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success_message', 'Naudotojas buvo ištrintas sėkmingai.');
    }

}
