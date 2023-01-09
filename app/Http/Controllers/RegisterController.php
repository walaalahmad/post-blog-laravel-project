<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
   public function create(){

    return view('register.create');
   }
   public function store ()
   {
    // return request()->all();
    $attr= request()->validate([
        'username' => 'required|min:2|max:255|unique:users,username',
        'password' => 'required|max:255|min:2',
        'email'   => 'required|unique:users,email',
        'name'   => 'required|min:2|max:255',

     ]);
    //  $attr['password'] = bcrypt($attr['password']); or using Mutators
     $user = User::create($attr);
     //use this session flash or with return
    //  session()->flash('success','your Acount has been created');
    auth()->login($user);
     return redirect('/')->with('success','your Acount has been created');
   }
}
