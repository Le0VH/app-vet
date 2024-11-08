<?php

namespace App\Http\Controllers;

use App\Models\RegistroMovimientoInventario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RegistroMovimientoInventarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RegistroMovimientoInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $registroMovimientoInventarios = RegistroMovimientoInventario::paginate();

        return view('registro-movimiento-inventario.index', compact('registroMovimientoInventarios'))
            ->with('i', ($request->input('page', 1) - 1) * $registroMovimientoInventarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $registroMovimientoInventario = new RegistroMovimientoInventario();

        return view('registro-movimiento-inventario.create', compact('registroMovimientoInventario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistroMovimientoInventarioRequest $request): RedirectResponse
    {
        RegistroMovimientoInventario::create($request->validated());

        return Redirect::route('registro-movimiento-inventarios.index')
            ->with('success', 'RegistroMovimientoInventario created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $registroMovimientoInventario = RegistroMovimientoInventario::find($id);

        return view('registro-movimiento-inventario.show', compact('registroMovimientoInventario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $registroMovimientoInventario = RegistroMovimientoInventario::find($id);

        return view('registro-movimiento-inventario.edit', compact('registroMovimientoInventario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegistroMovimientoInventarioRequest $request, RegistroMovimientoInventario $registroMovimientoInventario): RedirectResponse
    {
        $registroMovimientoInventario->update($request->validated());

        return Redirect::route('registro-movimiento-inventarios.index')
            ->with('success', 'RegistroMovimientoInventario updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        RegistroMovimientoInventario::find($id)->delete();

        return Redirect::route('registro-movimiento-inventarios.index')
            ->with('success', 'RegistroMovimientoInventario deleted successfully');
    }
}
