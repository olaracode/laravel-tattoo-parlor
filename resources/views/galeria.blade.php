@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php
        $tatuadores = App\Tatuador::all();
        $x = 0
    ?>
    <section id="main" class="wrapper">
        <div class="container">
            <h2 align="center">Galeria de tatuajes</h2>
            <br><br>
            <div class="row 50%">
                @foreach($tatuadores as $tatuador)
                    <div class="4u 12u$(xsmall)">

                        @if(count($tatuador->tattoos) > 0)
                            <article>
                                <div class="content">
                                    <a href="{{ ($tatuador->nombre) }}" class="button fit">{{ $tatuador->nombre }}</a>
                                </div>
                            </article>
                            <div align="center">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 300px; width: 300px;">
                                <?php $x = 0; ?>
                                <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        @foreach($tatuador->tattoos as $tattoo)
                                            @if($x == 0)
                                                <li data-target="#myCarousel" data-slide-to="{{$x}}" class="active"></li>
                                                <?php $x = $x+1; ?>

                                            @else
                                                <li data-target="#myCarousel" data-slide-to="{{$x}}"></li>
                                                <?php $x = $x+1; ?>

                                            @endif
                                        @endforeach
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <?php $x = 0;?>
                                    <div class="carousel-inner">
                                        @foreach($tatuador->tattoos as $tatuaje)
                                            @if($x == 0)
                                                <div class="item active">
                                                    <img src="/storage/{{ $tatuaje->image }}" style="height: 300px; width: 300px;">
                                                </div>
                                                <?php $x = $x+1; ?>

                                            @elseif($x < 4)
                                                <div class="item">
                                                    <img src="/storage/{{ $tatuaje->image }}" style="height: 300px; width: 300px;">
                                                </div>
                                                <?php $x = $x+1; ?>
                                            @endif
                                        @endforeach
                                    </div>
{{--                                    <a style="color: #51BAA4;" class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
{{--                                        <span class="glyphicon glyphicon-chevron-left"></span>--}}
{{--                                        <span class="sr-only">Previous</span>--}}
{{--                                    </a>--}}
{{--                                    <a style="color: #51BAA4;" class="right carousel-control" href="#myCarousel" data-slide="next">--}}
{{--                                        <span class="glyphicon glyphicon-chevron-right"></span>--}}
{{--                                        <span class="sr-only">Next</span>--}}
{{--                                    </a>--}}
                                </div>
                            </div>
                            <br>
                        @else
                            <article>
                                <div class="content">
                                    <a href="{{ ($tatuador->nombre) }}" class="button fit">{{ $tatuador->nombre }}</a>
                                </div>
                                <h5 align="center">No disponible</h5>
                                <br>
                            </article>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
