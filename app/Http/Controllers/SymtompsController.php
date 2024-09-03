<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symtomps;

class SymtompsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $symtomps = Symtomps::all();
        return view('backend.symtomps.index', compact('symtomps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.symtomps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $symtomps = new Symtomps();
        $symtomps->nama = $request->input('nama');
        $symtomps->description = $request->input('description');
        $symtomps->save();
        return redirect()->route('backend.symtomps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $symtomps = Symtomps::find($id);
        return view('backend.symtomps.show', compact('symtomps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $symtomps = Symtomps::find($id);
        return view('backend.symtomps.edit', compact('symtomps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $symtomps = Symtomps::find($id);
        $symtomps->nama = $request->input('nama');
        $symtomps->description = $request->input('description');
        $symtomps->save();
        return redirect()->route('backend.symtomps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Symtomps::destroy($id);
        return redirect()->route('backend.symtomps.index');
    }
}