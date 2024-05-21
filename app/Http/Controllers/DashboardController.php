<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {   
        $showDashboard = auth()->user()->isAdmin();
        return view('pages.dashboard',compact('showDashboard'));
    }

}
