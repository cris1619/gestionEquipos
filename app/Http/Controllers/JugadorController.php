<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = jugador::all();
        return view('Jugadores.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = Equipo::all();
        return view('Jugadores.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        jugador::create(
            $request->all()
        );
        return redirect()->route('Jugadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jugador = jugador::find($id);
        $equipos = Equipo::all();
        return view('Jugadores.edit', compact('jugador', 'equipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jugador = jugador::find($id);
        $jugador->update($request->all());
        return redirect()->route('Jugadores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jugador = jugador::findorFail($id);
        $jugador->delete();

        return redirect()->route('Jugadores.index');
    }
}
