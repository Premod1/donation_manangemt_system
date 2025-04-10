<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $projectCount = Project::count();
        $donationAmount = Donation::where('status', 'completed')->sum('amount');
        return view('dashboard', compact('userCount','projectCount','donationAmount'));
    }
}
