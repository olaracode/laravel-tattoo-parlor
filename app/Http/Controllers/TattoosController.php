<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TattoosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $imagePath = request('image')->store('uploads', 'public');

        $tattoo = new \App\Tattoo();
        $tattoo->tatuador_id = $data['tatuador_id'];
        $tattoo->estilo = $data['estilo'];
        $tattoo->descripcion = $data['descripcion'];
        $tattoo->image = $imagePath;
        $tattoo->save();
        return redirect('welcome');
    }
}
