<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;
use PhpParser\Builder\Class_;

class CitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('citas.crear');
    }

    public function store()
    {
        $data = request()->validate([
            'tatuador_id' => 'required',
            'cliente' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'pago' => 'required',
            'fecha' => 'required',
        ]);
        \App\Cita::create($data);
        return redirect('welcome');
    }

    public function edit($id)
    {
        $cita = Cita::find($id);
        return view('citas.modify', compact('cita', 'id'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'fecha' => '',
            'pago' => '',
        ]);
        $cita = Cita::find($id);
        if ($request->get('fecha') != null)
        {
            $cita->fecha = $request->get('fecha');
        }
        if ($request->get('pago') != null)
        {
            $cita->pago = $cita->pago + $request->get('pago');
        }

        $cita->save();
        return redirect('agenda');

    }
}
