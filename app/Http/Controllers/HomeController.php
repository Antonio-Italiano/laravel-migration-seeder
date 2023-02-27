<?php

namespace App\Http\Controllers;

use App\Models\train;

class HomeController extends Controller
{
    public function index()
    {
    return view('home');
    }
}
