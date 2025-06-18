<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.learner.dashboard');
    }
}
