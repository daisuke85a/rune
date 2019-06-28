<?php

namespace App\Http\Controllers;

use App\RuneRate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RuneRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        RuneRate::create([
            'mode' => request('mode'),
            'rate' => request('rate'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RuneRate  $runeRate
     * @return \Illuminate\Http\Response
     */
    public function show(RuneRate $runeRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RuneRate  $runeRate
     * @return \Illuminate\Http\Response
     */
    public function edit(RuneRate $runeRate)
    {
        //
    }

    public function editLoginUser()
    {
        //
        $runeRate = RuneRate::Where('user_id', Auth::user()->id)->first();

        return view('rune_rates.edit', compact('runeRate'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RuneRate  $runeRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RuneRate $runeRate)
    {
        if ($runeRate->user_id === Auth::user()->id) {
            $runeRate->update(
                [
                    'mode' => request('mode'),
                    'rate' => request('rate'),
                ]
            );
        }

        return redirect('/home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RuneRate  $runeRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(RuneRate $runeRate)
    {
        //
    }
}
