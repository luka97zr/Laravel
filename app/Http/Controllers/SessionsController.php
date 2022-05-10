<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create() {
        return view('sessions.create');
    }

    public function store() {
        $attirubutes = request()->validate([
            'email' => ['required','email'],
            'password'  => ['required']
        ]);

        if (auth()->attempt($attirubutes)) {
            session()->regenerate(); // Za sprecavanje session fixation-a

            return redirect('/')->with('success', 'You have logged in!');
        }

        throw ValidationException::withMessages([
            'passoword' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success','Goodbye!');
    }
}
