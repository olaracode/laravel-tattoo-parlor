@extends('layouts.admin')
@section('content')
    <?php
            $tatuadores = App\Tatuador::all();
    ?>

    <section id="main" class="wrapper">
        <div class="container">
            <h2 align="center">Añadir nuevo tatuaje</h2>
            <form method="post" action="/tattoos" enctype="multipart/form-data">
                @csrf
                <div class="row uniform 50%">
                    <div class="12u$">
                        <div class="select-wrapper">
                            <select name="tatuador_id" id="tatuador_id">
                                <option value="">- Tatuador -</option>
                                @foreach($tatuadores as $tatuador)
                                    <option value="{{$tatuador->id}}">{{$tatuador->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('tatuador_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="12u$">
                        <input type="text" name="estilo" id="estilo" value="" placeholder="Estilo">
                        @error('estilo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="12u$">
                        <textarea name="descripcion" id="descripcion" placeholder="Descripcion" rows="3"></textarea>
                        @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="file" class="form-control-file" name="image" id="image" value="">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Guardar" class="special" /></li>
                            <li><input type="reset" value="Resetear" /></li>
                        </ul>
                    </div>
                </div>

            </form>
        </div>
    </section>