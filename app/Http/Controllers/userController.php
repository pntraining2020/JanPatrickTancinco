<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Logs;

class userController extends Controller
{
    public function showHome(){
        $users = User::get();
        return view('/home', compact('users'));
    }
}
