<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TatuadorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('tatuadores.createtatuadores');
    }
    public function store()
    {
        $data = request()->validate([
           'nombre' => 'required',
            'especialidad' => 'required',
        ]);

        \App\Tatuador::create($data);
        return redirect('welcome');
//        dd(request()->all());
    }
}
