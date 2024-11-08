<?php

namespace App\Http\Controllers;

use App\Models\PlantillaNotificacion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PlantillaNotificacionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PlantillaNotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $plantillaNotificacions = PlantillaNotificacion::paginate();

        return view('plantilla-notificacion.index', compact('plantillaNotificacions'))
            ->with('i', ($request->input('page', 1) - 1) * $plantillaNotificacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $plantillaNotificacion = new PlantillaNotificacion();

        return view('plantilla-notificacion.create', compact('plantillaNotificacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlantillaNotificacionRequest $request): RedirectResponse
    {
        PlantillaNotificacion::create($request->validated());

        return Redirect::route('plantilla-notificacions.index')
            ->with('success', 'PlantillaNotificacion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $plantillaNotificacion = PlantillaNotificacion::find($id);

        return view('plantilla-notificacion.show', compact('plantillaNotificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $plantillaNotificacion = PlantillaNotificacion::find($id);

        return view('plantilla-notificacion.edit', compact('plantillaNotificacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlantillaNotificacionRequest $request, PlantillaNotificacion $plantillaNotificacion): RedirectResponse
    {
        $plantillaNotificacion->update($request->validated());

        return Redirect::route('plantilla-notificacions.index')
            ->with('success', 'PlantillaNotificacion updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PlantillaNotificacion::find($id)->delete();

        return Redirect::route('plantilla-notificacions.index')
            ->with('success', 'PlantillaNotificacion deleted successfully');
    }
}
