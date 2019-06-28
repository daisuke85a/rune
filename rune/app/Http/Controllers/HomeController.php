<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuneRate;
use Illuminate\Support\Facades\Auth;

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
        $runeRateExists = RuneRate::Where('user_id', Auth::user()->id )->exists();
        if($runeRateExists === false){
            return view('rune_rates.create');
        }
        else{
            return view('home');
        }
    }
}
