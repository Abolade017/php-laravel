<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
  public function create()
  {
    return view('register.create');
  }
  public function store()
  {
    /* var_dump(request()->all()); or
      return request()->all(); or */
    $attributes = request()->validate([
      'name' => 'required|max:255',
      'username' => 'required|min:3|max:255|unique:users,username ',
      'email' => 'required|email|max:255|unique: users,email',
      'password' => 'required|min:7|max:255'
    ]);
     User::create($attributes);
    //log the user in
    return redirect('/')->with('success!, your account has been created');
  }
}
