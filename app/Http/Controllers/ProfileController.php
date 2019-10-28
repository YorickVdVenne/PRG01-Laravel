<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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

    public function update(User $user)
    {
        $user->update($this->vailidatedData());

        return redirect()->back();
    }

    protected function vailidatedData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
    }
}
