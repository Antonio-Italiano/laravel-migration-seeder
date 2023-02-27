<?php

namespace App\Http\Controllers;

use App\Models\train;

class HomeController extends Controller
{
    public function index()
    {
       $trains = Train::all();
       return view('home', compact('trains'));
    }
}
