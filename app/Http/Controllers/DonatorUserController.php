<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonatorUserController extends Controller
{
    public function index()
    {
        //get auth user
        $user = auth()->user();
        return view('donator.User.index', compact('user'));
    }
}
