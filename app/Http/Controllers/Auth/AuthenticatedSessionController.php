<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validācija
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Pieslēgšanās
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Novirzīšana uz /todos pēc veiksmīgas pieslēgšanās
            return redirect()->route('todos.index');
        }

        // Ja login neizdodas, atgriezt lietotāju atpakaļ ar kļūdu
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Logout the user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
