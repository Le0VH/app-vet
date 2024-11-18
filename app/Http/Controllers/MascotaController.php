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
        if(Auth::user()->rol == 1){
            $mascotas = Mascota::paginate();

        return view('mascota.index', compact('mascotas'))
            ->with('i', ($request->input('page', 1) - 1) * $mascotas->perPage());

        }if(Auth::user()->rol == 3){

        $mascotas = Mascota::where('id_dueño', '=', Auth::user()->id)->paginate();

        return view('mascota.index', compact('mascotas'))
            ->with('i', ($request->input('page', 1) - 1) * $mascotas->perPage());
        }
        $mascotas = Mascota::whereRaw('1 = 0')->paginate();

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
        $mascota = new Mascota();
    
        // Asignar los valores del request manualmente
        $mascota->nombre_mascota = $request->input('nombre_mascota');
        $mascota->especie = $request->input('Especie');
        $mascota->raza = $request->input('Raza');
        $mascota->tipo_pelaje = $request->input('Tipo_Pelaje');
        $mascota->color_pelaje = $request->input('color_pelaje');
        $mascota->fecha_nacimiento = $request->input('Fecha_Nacimiento');
        $mascota->fecha_adopcion = $request->input('Fecha_Adopcion');
        $mascota->tipificacion_sangre = $request->input('tipificacion_sangre');
        $mascota->numero_chip = $request->input('numero_chip');
        $mascota->castracion = $request->input('castracion');
        $mascota->fecha_castracion = $request->input('Fecha_Castracion');
        $mascota->id_dueño = Auth::user()->id;
        
        // Guardar la instancia de Mascota
        $mascota->save();

        return redirect()->route('mascotas.index')
        ->with('success', 'Mascota updated successfully');
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
        // Asignar los valores a variables
        $nombre_mascota = $request->input('nombre_mascota');
        $especie = $request->input('Especie');
        $raza = $request->input('Raza');
        $tipo_pelaje = $request->input('Tipo_Pelaje');
        $color_pelaje = $request->input('Color_Pelaje');
        $fecha_nacimiento = $request->input('Fecha_Nacimiento');
        $fecha_adopcion = $request->input('Fecha_Adopcion');
        $tipificacion_sangre = $request->input('Tipificacion_Sangre');
        $numero_chip = $request->input('Numero_Chip');
        $castracion = $request->input('Castracion');
        $fecha_castracion = $request->input('Fecha_Castracion');
        $id_dueño  = Auth::user()->id;
    
        // Asignar las variables al modelo
        $mascota->nombre_mascota = $nombre_mascota;
        $mascota->especie = $especie;
        $mascota->raza = $raza;
        $mascota->tipo_pelaje = $tipo_pelaje;
        $mascota->color_pelaje = $color_pelaje;
        $mascota->fecha_nacimiento = $fecha_nacimiento;
        $mascota->fecha_adopcion = $fecha_adopcion;
        $mascota->tipificacion_sangre = $tipificacion_sangre;
        $mascota->numero_chip = $numero_chip;
        $mascota->castracion = $castracion;
        $mascota->fecha_castracion = $fecha_castracion;
        $mascota->id_dueño = $id_dueño;
    
        // Guardar la instancia con los valores actualizados
        $mascota->save();
    
        // Redirigir con mensaje de éxito
        return redirect()->route('mascotas.index')
            ->with('success', 'Mascota updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Mascota::find($id)->delete();

        return Redirect::route('mascotas.index')
            ->with('success', 'Mascota deleted successfully');
    }
}