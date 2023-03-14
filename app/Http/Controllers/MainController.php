<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function ligues()
    {
        return view('ligues');
    }

    public function planning()
    {
        return view('planning');
    }

    public function contact()
    {
        return view('contact');
    }

}
