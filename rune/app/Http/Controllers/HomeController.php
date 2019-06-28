<?php

namespace App\Http\Controllers;

use App\RuneRate;
use App\HelpHistory;
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
        $runeRateExists = RuneRate::Where('user_id', Auth::user()->id)->exists();
        if ($runeRateExists === false) {
            return view('rune_rates.create');
        } else {
            $runeRate = RuneRate::Where('user_id', Auth::user()->id)->first();

            $helpHistories = HelpHistory::Where('user_id', Auth::user()->id)->get();

            $sumRune = 0;
            foreach ($helpHistories as $helpHistory) {
                $sumRune += $helpHistory->rune;
            }

            $yen = (int)$sumRune * (int)$runeRate->rate;

            return view('home', compact('runeRate','sumRune','yen'));
        }
    }
}
