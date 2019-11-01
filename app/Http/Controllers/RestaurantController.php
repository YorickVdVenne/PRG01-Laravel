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

        $restaurants = Restaurant::where(function($restaurant){
            $restaurant->where('category', request('category'));
            $restaurant->where('published', '1');
        })->paginate(5)->appends('category', request('category'));

     }
     else {
        $restaurants = Restaurant::where('published', '1')->paginate(5);
        }

        return view('restaurant.index', compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
        return view('restaurant.show', compact('restaurant'));
    }
}
