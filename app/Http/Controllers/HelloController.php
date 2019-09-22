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
       $restaurants = [
           'Restaurant 1',
           'Restaurant 2',
           'Restaurant 3',
           'Restaurant 4',
       ];


        return view('restaurants', compact('restaurants'));
    }
}
