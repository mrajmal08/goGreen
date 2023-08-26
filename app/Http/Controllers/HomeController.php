<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalUSers = User::all()->count();
        return view('home', compact('totalUSers'));
    }

    public function profile()
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        return view('user.profile', compact('user'));
    }
}
