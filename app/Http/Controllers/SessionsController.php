<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create ()
    {
       return view('sessions.create');


    }
    public function store ()
    {
        $attr = request()->validate([
            'email'=>'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($attr))
        {
            throw ValidationException::withMessages(
                ['email' => 'your provided credentials could not be verified ']
            );
            //      or   return back()->withinput()->withErrors(['email' => 'The credentials are incorrect!']);

        }
         session()->regenerate();
        return  redirect('/')->with('success', 'Welcome Back!');
    }
    public function destroy ()
    {
        auth()->logout();
        return redirect('/')->with('success','Goodby');


    }
}
