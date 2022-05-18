<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'username'  => ['required','max:255','min:3',Rule::unique('users','username')],
            'email'     => ['required','email','max:255',Rule::unique('users','email')],
            'password'  => ['required','min:7','max:255'],
        ]);
        $user = User::create($attributes);

        auth()->login($user);
        session()->flash('success','Your account has been created');
        return redirect('/');
    }
}
