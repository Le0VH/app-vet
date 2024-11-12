<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MascotaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Auth;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        if(Auth::user()->id == 2){
            $mascotas = Mascota::paginate();

        return view('mascota.index', compact('mascotas'))
            ->with('i', ($request->input('page', 1) - 1) * $mascotas->perPage());

        }

        $mascotas = Mascota::where('id_dueño', '=', Auth::user()->id)->paginate();

        return view('mascota.index', compact('mascotas'))
            ->with('i', ($request->input('page', 1) - 1) * $mascotas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $mascota = new Mascota();

        return view('mascota.create', compact('mascota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MascotaRequest $request): RedirectResponse
    {
        Mascota::create($request->validated());

        return Redirect::route('mascotas.index')
            ->with('success', 'Mascota created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $mascota = Mascota::find($id);

        return view('mascota.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $mascota = Mascota::find($id);

        return view('mascota.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MascotaRequest $request, Mascota $mascota): RedirectResponse
    {
        $mascota->update($request->validated());

        return Redirect::route('mascotas.index')
            ->with('success', 'Mascota updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Mascota::find($id)->delete();

        return Redirect::route('mascotas.index')
            ->with('success', 'Mascota deleted successfully');
    }
}
