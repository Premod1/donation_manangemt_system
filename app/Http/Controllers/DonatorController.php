<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;

class DonatorController extends Controller
{
    public function dashboard()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('donator.dashboard');
    }
    public function index(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $donations = Donation::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(10);
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('donator.Donate.Index', compact('donations','projects'));
    }

    public function create()
    {

    }
}
