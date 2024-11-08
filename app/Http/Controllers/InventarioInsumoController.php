<?php

namespace App\Http\Controllers;

use App\Models\InventarioInsumo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\InventarioInsumoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InventarioInsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $inventarioInsumos = InventarioInsumo::paginate();

        return view('inventario-insumo.index', compact('inventarioInsumos'))
            ->with('i', ($request->input('page', 1) - 1) * $inventarioInsumos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inventarioInsumo = new InventarioInsumo();

        return view('inventario-insumo.create', compact('inventarioInsumo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventarioInsumoRequest $request): RedirectResponse
    {
        InventarioInsumo::create($request->validated());

        return Redirect::route('inventario-insumos.index')
            ->with('success', 'InventarioInsumo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $inventarioInsumo = InventarioInsumo::find($id);

        return view('inventario-insumo.show', compact('inventarioInsumo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $inventarioInsumo = InventarioInsumo::find($id);

        return view('inventario-insumo.edit', compact('inventarioInsumo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InventarioInsumoRequest $request, InventarioInsumo $inventarioInsumo): RedirectResponse
    {
        $inventarioInsumo->update($request->validated());

        return Redirect::route('inventario-insumos.index')
            ->with('success', 'InventarioInsumo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        InventarioInsumo::find($id)->delete();

        return Redirect::route('inventario-insumos.index')
            ->with('success', 'InventarioInsumo deleted successfully');
    }
}
