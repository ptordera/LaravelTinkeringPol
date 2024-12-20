<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos = Moto::all();
        return view('motos.index', compact('motos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'model' => 'required',
            'cilindrada' => 'required',
            'potencia' => 'required',
        ]);
        Moto::create($request->all());
        return redirect()->route('motos.index')->with('success', 'Moto creada correctament.');
    }

    /**
     * Display the specified resource.
     */
    public function show(moto $moto)
    {
        return view('motos.show', compact('moto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(moto $moto)
    {
        return view('motos.edit', compact('moto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, moto $moto)
    {
        $request->validate([
            'marca' => 'required',
            'model' => 'required',
            'cilindrada' => 'required',
            'potencia' => 'required',
        ]);
        $moto->update($request->all());
        return redirect()->route('motos.index')->with('success', 'Moto actualitzada correctament.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(moto $moto)
    {
        $moto->delete();
        return redirect()->route('motos.index')->with('success', 'Moto eliminada correctament.');
    }
}
