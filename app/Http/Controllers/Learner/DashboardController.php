<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        dd("arsalan");
        return view('admin.learner.dashboard');
    }
}
