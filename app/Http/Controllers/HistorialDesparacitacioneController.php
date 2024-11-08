<?php

namespace App\Http\Controllers;

use App\Models\HistorialDesparacitacione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HistorialDesparacitacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HistorialDesparacitacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $historialDesparacitaciones = HistorialDesparacitacione::paginate();

        return view('historial-desparacitacione.index', compact('historialDesparacitaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $historialDesparacitaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $historialDesparacitacione = new HistorialDesparacitacione();

        return view('historial-desparacitacione.create', compact('historialDesparacitacione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HistorialDesparacitacioneRequest $request): RedirectResponse
    {
        HistorialDesparacitacione::create($request->validated());

        return Redirect::route('historial-desparacitaciones.index')
            ->with('success', 'HistorialDesparacitacione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $historialDesparacitacione = HistorialDesparacitacione::find($id);

        return view('historial-desparacitacione.show', compact('historialDesparacitacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $historialDesparacitacione = HistorialDesparacitacione::find($id);

        return view('historial-desparacitacione.edit', compact('historialDesparacitacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HistorialDesparacitacioneRequest $request, HistorialDesparacitacione $historialDesparacitacione): RedirectResponse
    {
        $historialDesparacitacione->update($request->validated());

        return Redirect::route('historial-desparacitaciones.index')
            ->with('success', 'HistorialDesparacitacione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        HistorialDesparacitacione::find($id)->delete();

        return Redirect::route('historial-desparacitaciones.index')
            ->with('success', 'HistorialDesparacitacione deleted successfully');
    }
}
