<?php

namespace App\Http\Controllers;

use App\Models\HistorialMedico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HistorialMedicoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HistorialMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $historialMedicos = HistorialMedico::paginate();

        return view('historial-medico.index', compact('historialMedicos'))
            ->with('i', ($request->input('page', 1) - 1) * $historialMedicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $historialMedico = new HistorialMedico();

        return view('historial-medico.create', compact('historialMedico'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HistorialMedicoRequest $request): RedirectResponse
    {
        HistorialMedico::create($request->validated());

        return Redirect::route('historial-medicos.index')
            ->with('success', 'HistorialMedico created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $historialMedico = HistorialMedico::find($id);

        return view('historial-medico.show', compact('historialMedico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $historialMedico = HistorialMedico::find($id);

        return view('historial-medico.edit', compact('historialMedico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HistorialMedicoRequest $request, HistorialMedico $historialMedico): RedirectResponse
    {
        $historialMedico->update($request->validated());

        return Redirect::route('historial-medicos.index')
            ->with('success', 'HistorialMedico updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        HistorialMedico::find($id)->delete();

        return Redirect::route('historial-medicos.index')
            ->with('success', 'HistorialMedico deleted successfully');
    }
}
