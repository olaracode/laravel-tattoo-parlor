@extends('layouts.app')
@section('content')
    <?php
        $tatuadores = App\Tatuador::all();
        $x = 0
    ?>
    <section id="main" class="wrapper">
        <div class="container">
            <h2 align="center">Galeria de tatuajes</h2>
            <br><br>

            @foreach($tatuadores as $tatuador)
                <article>
                    <div class="content">
                        <a href="#" class="button fit">{{ $tatuador->nombre }}</a>
                    </div>
                </article>
                <div class="box alt">
                    <div class="row 50%">
                        @foreach($tatuador->tattoos as $tatuaje)
                            <div class="4u" align="center">
                                <a href="/storage/{{ $tatuaje->image }}"><span class="image fit"><img src="/storage/{{ $tatuaje->image }}" style="height: 300px; width: 300px;"></span></a>
                                <ul class="alt">
                                    <li>{{$tatuaje->estilo}}</li>
                                    <li>{{$tatuaje->descripcion}}</li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>

            @endforeach
        </div>
    </section>
