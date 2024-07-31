<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entries;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_entries = Entries::all();
        return view('crud.index', compact('all_entries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        Entries::create($request->all());
        return redirect()->route('crud.index')->with('success', 'Insert Entrie Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singale_entry = Entries::findOrFail($id);
        return view('crud.show', compact('singale_entry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singale_entry = Entries::findOrFail($id);
        return view('crud.edit', compact('singale_entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $singale_data = Entries::findOrFail($id);
        $singale_data->update($request->all());
        return redirect()->route('crud.index')->with('success', 'Updated Entrie Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Entries::findOrFail($id);
        $data->delete();
        return redirect()->route('crud.index')->with('success', 'Entry deleted successfully.');
    }
}
