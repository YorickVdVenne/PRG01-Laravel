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
        $data = request()->validate([
            'name' => 'required|min:5|max:20'
        ]);
        
       \app\Restaurant::create($data);

        return redirect()->back(); 
    }
}
