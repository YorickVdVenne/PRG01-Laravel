<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('restaurant.index', compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
        return view('restaurant.show', compact('restaurant'));
    }
}
