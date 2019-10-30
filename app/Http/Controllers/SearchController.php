<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Support\Facades\Request;

class SearchController extends Controller
{
    public function search()
    {
        $q = Request::get ( 'q' );
        $restaurant = Restaurant::where('name','LIKE','%'.$q.'%')->orWhere('category','LIKE','%'.$q.'%')->get();

        if(count($restaurant) > 0)
        return view('search')->withDetails($restaurant)->withQuery ( $q );

        else return view ('search', [ 
            'errorMessage' => 'No Restaurants found. Try to search again!',
        ]);
    }
}
