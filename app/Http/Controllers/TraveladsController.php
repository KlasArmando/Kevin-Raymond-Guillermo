<?php

namespace App\Http\Controllers;

use App\Travelad;
use Illuminate\Http\Request;

class TraveladsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelads = Travelad::all();
        return view('travelads.index', compact('travelads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('travelads/create');
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
        $travelads = new TravelAd();
        $travelads ->name = request('name');
        $travelads ->title = request('title');
        $travelads ->description = request('description');

        $travelads ->save();
        return redirect('travelads');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Travelad  $travelad
     * @return \Illuminate\Http\Response
     */
    public function show(Travelad $travelad)
    {
        //
        return view ('travelads/show', compact('travelad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travelad  $travelad
     * @return \Illuminate\Http\Response
     */
    public function edit(Travelad $travelad)
    {
        //
        return view ('travelads.edit', compact('travelad'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travelad  $travelad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travelad $travelad)
    {
        //
        $travelad->update($request->all());

        $travelad->save();

        return redirect('travelads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travelad  $travelad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travelad $travelad)
    {
        //
        $travelad->delete();
        return redirect('travelads');
    }
}
