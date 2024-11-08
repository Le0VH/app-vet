<?php

namespace App\Http\Controllers;

use App\Models\Vacuna;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VacunaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $vacunas = Vacuna::paginate();

        return view('vacuna.index', compact('vacunas'))
            ->with('i', ($request->input('page', 1) - 1) * $vacunas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $vacuna = new Vacuna();

        return view('vacuna.create', compact('vacuna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VacunaRequest $request): RedirectResponse
    {
        Vacuna::create($request->validated());

        return Redirect::route('vacunas.index')
            ->with('success', 'Vacuna created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $vacuna = Vacuna::find($id);

        return view('vacuna.show', compact('vacuna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $vacuna = Vacuna::find($id);

        return view('vacuna.edit', compact('vacuna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VacunaRequest $request, Vacuna $vacuna): RedirectResponse
    {
        $vacuna->update($request->validated());

        return Redirect::route('vacunas.index')
            ->with('success', 'Vacuna updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Vacuna::find($id)->delete();

        return Redirect::route('vacunas.index')
            ->with('success', 'Vacuna deleted successfully');
    }
}
