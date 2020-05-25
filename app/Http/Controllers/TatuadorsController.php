<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TatuadorsController extends Controller
{
    public function create()
    {
        return view('tatuadores.createtatuadores');
    }
    public function store()
    {
        $data = request()->validate([
           'nombre' => 'required',
        ]);

        \App\Tatuador::create($data);
        return redirect('welcome');
//        dd(request()->all());
    }
}
