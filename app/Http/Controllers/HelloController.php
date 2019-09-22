<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about()
    {
        

        return view('about');
    }
    public function options()
    {
       $options = [
           'Option 1',
           'Option 2',
           'Option 3',
           'Option 4',
       ];


        return view('options', compact('options'));
    }
}
