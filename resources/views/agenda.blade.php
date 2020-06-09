@extends('layouts.admin')
@section('content')
    <?php
      $citas = App\Cita::All();
      $date = date("Y-m-d");
      $dia = date("d-m-Y");
    ?>
    <section id="main" class="wrapper">
        <div class="container">
            <div class="row">
                <div class="4u">
                    <h1>{{ $dia }}</h1>
                </div>
                <div class="8u">
                    <div align="right"><a href="{{ ('citas/crear') }}">Nueva Cita</a></div>
                </div>
            </div>
            <hr>
            <h2 align="center">Citas del Día</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Tatuador</th>
                            <th>Cliente</th>
                            <th>Total cancelado</th>
                            <th>Costo Total</th>
                            <th>Deuda</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                            @if($cita->fecha == $date)
                                <tr>
                                    <td>{{$cita->tatuador->nombre}}</td>
                                    <td>{{$cita->cliente}}</td>
                                    <td>{{$cita->pago}}</td>
                                    <td>{{$cita->precio}}</td>
                                    <td>{{$cita->precio - $cita->pago}}</td>
                                    <td><a href="{{ ('citas/'), $cita->id, 'modify' }}" >modificar</a></td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <hr>
            <h2 align="center">Citas proximas</h2>
                @foreach(App\Tatuador::all() as $tatuador)
                    @if(count($tatuador->citas) > 0)
                        <h4>{{$tatuador->nombre}}</h4>
                                <div class="table-wrapper">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Cliente</th>
                                            <th>Fecha(Año/Mes/Día)</th>
                                            <th>Cancelado</th>
                                            <th>Total</th>
                                            <th>Deuda</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tatuador->citas as $cita)
                                                @if($cita->fecha != $date)
                                                    <tr>
                                                        <td>{{$cita->cliente}}</td>
                                                        <td>{{$cita->fecha}}</td>
                                                        <td>{{$cita->pago}}</td>
                                                        <td>{{$cita->precio}}</td>
                                                        <td>{{$cita->precio - $cita->pago}}</td>
                                                        <td><a href="citas/{{$cita->id}}/edit" >modificar</a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            <br>
                    @endif
            @endforeach

            </div>
        </div>
    </section>

    <h3> </h3>
