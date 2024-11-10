<?php

namespace App\Http\Controllers;

use App\Models\HistorialExamene;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HistorialExameneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HistorialExameneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $historialExamenes = HistorialExamene::paginate();

        return view('historial-examene.index', compact('historialExamenes'))
            ->with('i', ($request->input('page', 1) - 1) * $historialExamenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $historialExamene = new HistorialExamene();

        return view('historial-examene.create', compact('historialExamene'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HistorialExameneRequest $request): RedirectResponse
    {
        HistorialExamene::create($request->validated());

        return Redirect::route('historial-examenes.index')
            ->with('success', 'HistorialExamene created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $historialExamene = HistorialExamene::find($id);

        return view('historial-examene.show', compact('historialExamene'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $historialExamene = HistorialExamene::find($id);

        return view('historial-examene.edit', compact('historialExamene'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HistorialExameneRequest $request, HistorialExamene $historialExamene): RedirectResponse
    {
        $historialExamene->update($request->validated());

        return Redirect::route('historial-examenes.index')
            ->with('success', 'HistorialExamene updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        HistorialExamene::find($id)->delete();

        return Redirect::route('historial-examenes.index')
            ->with('success', 'HistorialExamene deleted successfully');
    }
}
