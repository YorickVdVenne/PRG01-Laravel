<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

        return view('admin.index', compact('restaurants'));
    }

    public function create()
    {
        $restaurant = new Restaurant();

        return view('admin.create', compact('restaurant'));
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

        return redirect('/admin');

    }

    public function show(Restaurant $restaurant)
    {
       return view('admin.show', compact('restaurant'));
    }

    public function edit(Restaurant $restaurant)
    {
        return view('admin.edit', compact('restaurant'));
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

        return redirect('/admin');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect('/admin');
    }

}
