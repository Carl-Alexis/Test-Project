<?php

namespace App\Http\Controllers;

use App\Models\Char;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $char = Char::all();
        return view('char.index', compact('char'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('char.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'rarity' => 'required',
            'name' => 'required',
            'elem'=> 'required',
            'weap' => 'required'
        ]);

        //S2
        Char::create($request->all());

        //S3
        return redirect()->route('char.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Char  $char
     * @return \Illuminate\Http\Response
     */
    public function show(Char $char)
    {
        return  view('char.show', compact('char'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Char  $char
     * @return \Illuminate\Http\Response
     */
    public function edit(Char $char)
    {
        return  view('char.edit', compact('char'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Char  $char
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Char $char)
    {
        $char->update($request->all());

        //S3
        return redirect()->route('char.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Char  $char
     * @return \Illuminate\Http\Response
     */
    public function destroy(Char $char)
    {
        $char->delete();
        return redirect()->route('char.index');
    }
}
