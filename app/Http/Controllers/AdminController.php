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

        Restaurant::create($this->vailidatedData());

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

        $restaurant->update($this->vailidatedData());

        return redirect('/admin');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect('/admin');
    }

    protected function vailidatedData()
    {
        return request()->validate([
            'name' => 'required',
        ]);
    }
}
