<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth()->user();
        if ($user->role_id == 1) {
            return view('dashboard.admin', compact('user'));
        } else {
            return view('dashboard.normal-user', compact('user'));
        }
    }
}
