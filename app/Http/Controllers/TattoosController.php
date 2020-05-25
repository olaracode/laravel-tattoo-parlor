<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TattoosController extends Controller
{
    public function create()
    {
        return view('tattoos.createtattoo');
    }
    public function store()
    {
        $data = request()->validate([
            'tatuador_id' => 'required',
            'estilo' => 'required',
            'descripcion' => 'required',
            'image' => 'required|image',
        ]);
        $tattoo = new \App\Tattoo();
        $tattoo->tatuador_id = $data['tatuador_id'];
        $tattoo->estilo = $data['estilo'];
        $tattoo->descripcion = $data['descripcion'];
        $tattoo->image = $data['image'];
        $tattoo->save();

        return redirect('welcome');
    }
}
