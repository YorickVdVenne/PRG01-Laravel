<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about()
    {
        

        return view('about');
    }
    public function restaurants()
    {
    
       $restaurants = \App\Restaurant::all();
       
        return view('restaurants', compact('restaurants'));
    }
}
