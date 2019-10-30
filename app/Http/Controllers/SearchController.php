<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Support\Facades\Request;

class SearchController extends Controller
{
    public function search()
    {
        $search = Request::get ( 'search' );
        $restaurant = Restaurant::where('name','LIKE','%'.$search.'%')->orWhere('category','LIKE','%'.$search.'%')->get();

        if(count($restaurant) > 0)
        return view('search')->withDetails($restaurant)->withQuery ( $search );

        else return view ('search', [ 
            'errorMessage' => 'No Restaurants found. Try to search again!',
        ]);
    }
}
