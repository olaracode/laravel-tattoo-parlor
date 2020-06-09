@extends('layouts.admin')
@section('content')
    <?php $cita = \App\Cita::find($id);

    ?>
    <section id="main" class="wrapper">
        <div class="container">
            <h2 align="center">Modificar cita/Agregar Pago</h2>
            <div class="row">
                <div class="6u 12$(xsmall)" align="left">
                    <h4>Tatuador: {{$cita->tatuador->nombre}}</h4>
                </div>
                <div class="6u 12$(xsmall) align-right">
                    <h4>Cliente: {{$cita->cliente}}</h4>
                </div>
            </div>
            <form method="post" action="/citas/{{$cita->id}}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)" align="center">
                        <h2>Fecha actual {{$cita->fecha}}</h2>
                        <input type="date" name="fecha" id="date" value="" placeholder="{{$cita->fecha}}">
                        @error('fecha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="6u 12u$(xsmall)" align="center">
                        <h2>Deuda: {{$cita->precio - $cita->pago}}</h2>
                        <input type="number" name="pago" id="pago" value="" placeholder="Nuevo pago">
                        @error('pago')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="12u$" align="center">
                        <br>
                        <ul class="actions">
                            <li><input type="submit" value="Actualizar" class="special" /></li>
                            <li><input type="reset" value="Resetear" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>



@endsection