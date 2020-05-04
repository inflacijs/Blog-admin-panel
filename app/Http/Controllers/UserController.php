<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        $users = User::latest()->paginate(10);
        return view('admin.users', ['users' => $users]);
    }

    public function store()
    {
        $validatedUser = request()->validate([
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'max:255', 'email', Rule::unique('users')],
            'password' => 'required'
        ]);
        
        User::create($validatedUser);

        return redirect ('users');

    }

    public function edit(User $user)
    {

        return view('admin.edit-users', ['user' => $user]);

    }

    public function update(User $user)
    {
        $validatedUser = request()->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user->update($validatedUser);

        return redirect ('users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('users');
    }

    public function search( Request $request)
    {
        $validation = request()->validate(
            ['search' => 'required'], 
            ['required' => 'Seach field was epty']);

        $search = $request->get('search');
        $results = User::where('name', 'LIKE', "%{$search}%")->paginate(10);
       
        if(count($results) > 0)
        {
            return view('admin.users', ['users' => $results]);
            
        }
            return view('admin.users');
        
            

    }

    
}
