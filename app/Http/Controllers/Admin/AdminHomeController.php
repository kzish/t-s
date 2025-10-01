<?php

namespace App\Http\Controllers\Admin;

use App\Models\Placement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function dashboard()
    {
        return view('admin.home.dashboard');
    }
}
