<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    public function users(){

        if(Auth::user()->role_id == 2){
            return redirect()->route('/')->with('error','Sorry you are not admin');
        }
        $users = User::orderBy('id', 'DESC')->get();
        return view('dashboard.users.index', compact('users'));
    }

    public function profile()
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        return view('user.profile', compact('user'));
    }
}
