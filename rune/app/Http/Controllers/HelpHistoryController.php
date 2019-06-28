<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\HelpItem;
use App\HelpHistory;
use Illuminate\Http\Request;

class HelpHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $helpHistories = HelpHistory::where('user_id', $user->id)->get();

        return view('help_histories.index', compact('helpHistories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        $helpItems = HelpItem::where('user_id', $user->id)->get();

        return view('help_histories.create', compact('helpItems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $helpItem = HelpItem::findOrFail($request->id);

        HelpHistory::create([
            'name' => $helpItem->name,
            'rune' => $helpItem->rune,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HelpHistory  $helpHistory
     * @return \Illuminate\Http\Response
     */
    public function show(HelpHistory $helpHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HelpHistory  $helpHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(HelpHistory $helpHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HelpHistory  $helpHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HelpHistory $helpHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HelpHistory  $helpHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(HelpHistory $helpHistory)
    {
        //
    }
}
