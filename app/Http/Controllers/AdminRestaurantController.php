<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class AdminRestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('admin.restaurants', compact('restaurants'));
    }

    public function create()
    {
        $restaurant = new Restaurant();

        return view('admin.createRestaurant', compact('restaurant'));
    }

    public function store()
    {
        $data = request()->validate([ 
            'name' => 'required',
            'category' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        Restaurant::create([
            'name' => $data['name'],
            'category' => $data['category'],
            'image' => $imagePath,
        ]);

        return redirect('/admin/restaurants');

    }

    public function show(Restaurant $restaurant)
    {
       return view('admin.showRestaurant', compact('restaurant'));
    }

    public function edit(Restaurant $restaurant)
    {
        return view('admin.editRestaurant', compact('restaurant'));
    }

    public function update(Restaurant $restaurant)
    {
        $data = request()->validate([ 
            'name' => 'required',
            'category' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $restaurant->update([
            'name' => $data['name'],
            'category' => $data['category'],
            'image' => $imagePath,
        ]);

        return redirect('/admin/restaurants');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect('/admin/restaurants');
    }
}
