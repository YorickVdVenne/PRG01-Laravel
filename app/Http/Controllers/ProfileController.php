<?php

namespace App\Http\Controllers;

use App\User;
use Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $userId = Auth::user()->id;
        $user = User::findOrFail($userId);

        return view('profile.index', [
            'user' => $user,
        ]);
    }

    public function edit()
    {
        $user = User::findOrFail(Auth::user()->id);

        return view('profile.edit', compact('user'));
    }

    public function update()
    {
        $user_id = Request::input('user_id');
        $user = User::find($user_id);

        if($user_id == null) {
            $user = Auth::user();
        }

        //Preventing Breaking Access Controll 
        $authenticated_user = Auth::user();
        if ($authenticated_user->id != $user->id) {
            return 'Unauthorised';
        }

        if ($user) {
            $user->update($this->vailidatedData());

            return redirect('/profile');
        }
        else {
            return 'no user found';
        }
    }

    protected function vailidatedData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
    }
}
