<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\HelpItem;
use Illuminate\Http\Request;

class HelpItemController extends Controller
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
        $helpItems = HelpItem::where('user_id', $user->id)->get();

        return view('help_items.index', compact('helpItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('help_items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HelpItem::create([
            'name' => request('name'),
            'rune' => request('rune'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/help_items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HelpItem  $helpItem
     * @return \Illuminate\Http\Response
     */
    public function show(HelpItem $helpItem)
    {
        return view('help_items.show', compact('helpItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HelpItem  $helpItem
     * @return \Illuminate\Http\Response
     */
    public function edit(HelpItem $helpItem)
    {
        return view('help_items.edit', compact('helpItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HelpItem  $helpItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HelpItem $helpItem)
    {
        // 自分が管理する項目かをチェック
        // TODO:csrfトークンで十分？
        if ($helpItem->user_id === Auth::user()->id) {
            $helpItem->update(
                [
                    'name' => request('name'),
                    'rune' => request('rune'),
                ]
            );
        }

        return redirect('/help_items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HelpItem  $helpItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(HelpItem $helpItem)
    {
        // TODO:csrfトークンで十分？
        if ($helpItem->user_id === Auth::user()->id) {
            $helpItem->delete();
        }

        return redirect('/help_items');
    }
}
