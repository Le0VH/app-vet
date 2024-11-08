<?php

namespace App\Http\Controllers;

use App\Models\Seguimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SeguimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $seguimientos = Seguimiento::paginate();

        return view('seguimiento.index', compact('seguimientos'))
            ->with('i', ($request->input('page', 1) - 1) * $seguimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $seguimiento = new Seguimiento();

        return view('seguimiento.create', compact('seguimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SeguimientoRequest $request): RedirectResponse
    {
        Seguimiento::create($request->validated());

        return Redirect::route('seguimientos.index')
            ->with('success', 'Seguimiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $seguimiento = Seguimiento::find($id);

        return view('seguimiento.show', compact('seguimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $seguimiento = Seguimiento::find($id);

        return view('seguimiento.edit', compact('seguimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SeguimientoRequest $request, Seguimiento $seguimiento): RedirectResponse
    {
        $seguimiento->update($request->validated());

        return Redirect::route('seguimientos.index')
            ->with('success', 'Seguimiento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Seguimiento::find($id)->delete();

        return Redirect::route('seguimientos.index')
            ->with('success', 'Seguimiento deleted successfully');
    }
}
