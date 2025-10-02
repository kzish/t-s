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

    public function index()
    {
        return view('admin.home.index');
    }

    public function newStep1()
    {
        return view('admin.home.newStep1');
    }
    public function newStep2()
    {
        return view('admin.home.newStep2');
    }
    public function newStep3()
    {
        return view('admin.home.newStep3');
    }
    public function newStep4()
    {
        return view('admin.home.newStep4');
    }
    public function newStep4AccomodationProven()
    {
        return view('admin.home.newStep4AccomodationProven');
    }
    public function newStep4AccomodationUnProven()
    {
        return view('admin.home.newStep4AccomodationUnProven');
    }
    public function newStep5()
    {
        return view('admin.home.newStep5');
    }
    public function newStep6()
    {
        return view('admin.home.newStep6');
    }
    public function newStep6University()
    {
        return view('admin.home.newStep6University');
    }
    public function busSummary()
    {
        return view('admin.home.newStep6UniversityTransportation.busSummary');
    }
    public function newStep7()
    {
        return view('admin.home.newStep7');
    }
}
