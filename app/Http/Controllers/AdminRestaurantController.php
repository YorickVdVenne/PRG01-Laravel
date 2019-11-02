<?php

namespace App\Http\Controllers;

use Request;
use App\Company;
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
        $restaurants = Restaurant::with('company')->get();

        return view('admin.restaurant.index', compact('restaurants'));
    }

    public function create()
    {
        $restaurant = new Restaurant();
        $companies = Company::all();

        return view('admin.restaurant.create', compact('restaurant', 'companies'));
    }

    public function store()
    {   

        $publish = Request::has('publish') ? true : false; 

        $data = request()->validate([ 
            'name' => 'required',
            'category' => 'required',
            'image' => ['required', 'image'],
            'company_id' => 'required',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        Restaurant::create([
            'name' => $data['name'],
            'category' => $data['category'],
            'image' => $imagePath,
            'publish' => $publish,
            'company_id' => $data['company_id'],
        ]);

        return redirect('/admin/restaurants');

    }

    public function show(Restaurant $restaurant)
    {
       return view('admin.restaurant.show', compact('restaurant'));
    }

    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurant.edit', compact('restaurant'));
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
