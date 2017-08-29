<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile()
    {
        $users = User::find(1);
    	return view('user.profile', compact('users'));
    }
}
