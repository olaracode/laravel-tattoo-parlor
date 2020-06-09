@extends('layouts.admin')
@section('content')
    <?php
    $tatuadores = App\Tatuador::all();
    ?>
    <section id="main" class="wrapper">
        <div class="container">
            <h2 align="center">Nueva cita</h2>
            <form method="post" action="/citas">
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
                        <input type="text" name="cliente" id="cliente" value="" placeholder="Cliente" />
                    </div>

                    <div class="12u$">
                    <textarea name="descripcion" id="descripcion" placeholder="Descripcion" rows="3"></textarea>
                    @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                    <div class="4u 12u$(xsmall)">
                        <input type="date" name="fecha" id="date" value="">
                        @error('fecha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="4u 12u$(xsmall)">
                        <input type="number" name="precio" id="precio" value="" placeholder="Precio $" />
                        @error('precio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="4u 12u$(xsmall)">
                        <input type="number" name="pago" id="pago" value="" placeholder="Cancelado">
                        @error('pago')
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
    </section