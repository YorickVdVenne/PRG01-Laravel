<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
    
       $restaurants = \App\Restaurant::all();
       
        return view('restaurant.index', compact('restaurants'));
    }
    public function store()
    {
        $restaurant = new \App\Restaurant();

        $restaurant->name = request('name');
        $restaurant->save();

        return redirect()->back(); 
    }
}
