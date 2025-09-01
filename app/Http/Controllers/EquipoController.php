<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipoRequest;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipoRequest $request)
    {
        Equipo::create($request->all());
        return redirect()->route('equipos.index')->with('success', 'Equipo creado :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(EquipoRequest $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipo = Equipo::findorFail($id);
        return view('equipos.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipoRequest $request, $id)
    {
        $equipo = Equipo::findorFail($id);
        $equipo->update($request->all());
        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado :)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipo = Equipo::findorFail($id);
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado :)');
    }
}
