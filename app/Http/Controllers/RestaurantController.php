<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        if (request()->has('category')) {
            $restaurants = Restaurant::where('category', request('category'))
            ->paginate(5)
            ->appends('category', request('category'));
        }
        else {
            $restaurants = Restaurant::paginate(5);
        }

        return view('restaurant.index')->with('restaurants', $restaurants);
    }

    public function show(Restaurant $restaurant)
    {
        return view('restaurant.show', compact('restaurant'));
    }
}
