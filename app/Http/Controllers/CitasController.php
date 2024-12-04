<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('citas.index');
    }

    public function getAll(Request $request)
    {
        if ($request->ajax()) {
            $citas = Citas::where('id_user', Auth::user()->id)->get();
            $data = [];
            foreach ($citas as $cita) {
                $data[] = [
                    'id' => $cita->id,
                    'title' => $cita->title,
                    'description' => $cita->description,
                    'allDay' => $cita->allDay,
                    'className' => $cita->className,
                    'start' => $cita->start,
                    'end' => $cita->end,
                    'location' => $cita->location
                ];
            }
            return response()->json($data);
        }
    }

    public function store(Request $request)
    {
        $data = json_decode($request->datos);
        if ($data->id > 0) {
            $cita = Citas::find($data->id);
        } else {
            $cita = new Citas();
            $cita->id_user = Auth::user()->id;
        }

        $cita->title = $data->title;
        $cita->description = $data->description;
        $cita->allDay = $data->allDay;
        $cita->className = $data->className;
        $cita->start = $data->start;
        $cita->end = $data->end;
        $cita->location = $data->location;
        $cita->save();

        return response()->json($cita);
    }

    public function destroy($id)
    {
        Citas::destroy($id);
        return response()->json(['status' => 'success']);
    }
}
