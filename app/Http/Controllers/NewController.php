<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET REQUEST
        return view('guitars.index', [
            'guitars' => Guitar::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET REQUEST
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST REQUEST
        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'year_made' => 'required|integer',
        ]);
        $guitar = new Guitar();
        $guitar->name = $request->input('name');
        $guitar->brand = $request->input('brand');
        $guitar->year_made = $request->input('year_made');
        $guitar->save();

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($guitar)
    {
        //GET REQUEST
        return view('guitars.show', [
            'guitar' => Guitar::findOrFail($guitar)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($guitar)
    {
        //GET REQUEST
        return view('guitars.edit', [
            'guitar' => Guitar::findOrFail($guitar)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $guitar)
    {
        //POST REQUEST
        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'year_made' => 'required|integer',
        ]);
        $record = Guitar::findOrFail($guitar);
        $record->name = $request->input('name');
        $record->brand = $request->input('brand');
        $record->year_made = $request->input('year_made');
        $record->save();

        return redirect()->route('guitars.show', $guitar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE REQUEST
        Guitar::find($id)->delete();
        return redirect()->route('guitars.index');
    }
}
