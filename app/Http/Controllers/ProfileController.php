<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = User::find(auth()->id());
        return view('admin.profile', ['user' => $user]);
    }

    public function update()
    {
        User::update();
    }
}
