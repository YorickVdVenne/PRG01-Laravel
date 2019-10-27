<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($user) 
    {
        $user = User::findOrFail($user);

        return view('profile.index', [
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
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
