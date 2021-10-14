<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        //validate the user
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //attempt to authenticate and login the user based on the provided credentials

        if (auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified']);       //or 

        }
        session()->regenerate();
        //redirect with a success flash message 
        return redirect('/')->with('success', 'Welcome back !');

        //auth failed
        // return back()
        // ->withInput()->withErrors(['email' =>'Your provided credentials could not be verified']); 
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
