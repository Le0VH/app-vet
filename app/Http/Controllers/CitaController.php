<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CitaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $citas = Cita::paginate();

        return view('cita.index', compact('citas'))
            ->with('i', ($request->input('page', 1) - 1) * $citas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cita = new Cita();

        return view('cita.create', compact('cita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CitaRequest $request): RedirectResponse
    {
        Cita::create($request->validated());

        return Redirect::route('citas.index')
            ->with('success', 'Cita created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $cita = Cita::find($id);

        return view('cita.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $cita = Cita::find($id);

        return view('cita.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CitaRequest $request, Cita $cita): RedirectResponse
    {
        $cita->update($request->validated());

        return Redirect::route('citas.index')
            ->with('success', 'Cita updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Cita::find($id)->delete();

        return Redirect::route('citas.index')
            ->with('success', 'Cita deleted successfully');
    }
}
