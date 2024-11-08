<?php

namespace App\Http\Controllers;

use App\Models\ArchivosAdjunto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ArchivosAdjuntoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArchivosAdjuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $archivosAdjuntos = ArchivosAdjunto::paginate();

        return view('archivos-adjunto.index', compact('archivosAdjuntos'))
            ->with('i', ($request->input('page', 1) - 1) * $archivosAdjuntos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $archivosAdjunto = new ArchivosAdjunto();

        return view('archivos-adjunto.create', compact('archivosAdjunto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArchivosAdjuntoRequest $request): RedirectResponse
    {
        ArchivosAdjunto::create($request->validated());

        return Redirect::route('archivos-adjuntos.index')
            ->with('success', 'ArchivosAdjunto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $archivosAdjunto = ArchivosAdjunto::find($id);

        return view('archivos-adjunto.show', compact('archivosAdjunto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $archivosAdjunto = ArchivosAdjunto::find($id);

        return view('archivos-adjunto.edit', compact('archivosAdjunto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArchivosAdjuntoRequest $request, ArchivosAdjunto $archivosAdjunto): RedirectResponse
    {
        $archivosAdjunto->update($request->validated());

        return Redirect::route('archivos-adjuntos.index')
            ->with('success', 'ArchivosAdjunto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ArchivosAdjunto::find($id)->delete();

        return Redirect::route('archivos-adjuntos.index')
            ->with('success', 'ArchivosAdjunto deleted successfully');
    }
}
