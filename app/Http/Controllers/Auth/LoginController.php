<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated($request, $user)
    {
        if ($user->role_id == 1) {
            return redirect()->route('home'); // Redirect admin to /admin route
        } else {
            return redirect('/'); // Redirect regular user to /user route
        }

        return redirect()->route('homepage'); // Redirect others to the default route
    }
}
