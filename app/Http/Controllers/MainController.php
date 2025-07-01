<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contactus');
    }

    public function shop()
    {
        return view('shop');
    }

    public function about()
    {
        return view('aboutus');
    }

    public function services()
    {
        return view('services');
    }

    public function equipRental()
    {
        return view('equipment-rental');
    }

    public function packageRental()
    {
        return view('package-rental');
    }
}
