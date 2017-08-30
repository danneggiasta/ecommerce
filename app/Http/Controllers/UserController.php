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
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
        	$order->cart = unserialize($order->cart);
        	return $order;
        });
    	return view('user.profile', compact('users', 'orders'));
    }
}
