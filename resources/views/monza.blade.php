@extends('layouts.app')
@section('content')
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <section id="monza">
        <h2>Monza</h2>
        <p>Realismo/Colores</p>
    </section>
<section id="main" class="wrapper">
    <div class="container">
        <div class="row">
            <div class="6u 12u$(xsmall)">
                <h2>Realismo</h2>
            </div>
            <div class="6u 12u$(xsmall)">
                Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy
                text Dummy text Dummy text Dummy text Dummy text Dummy text
                Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy
                text Dummy text Dummy text Dummy text Dummy text Dummy text
                Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy
                text Dummy text Dummy text Dummy text Dummy text Dummy text
                Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy
                text Dummy text Dummy text Dummy text Dummy text Dummy text
                Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy
                text Dummy text Dummy text Dummy text Dummy text Dummy text
            </div>
        </div>
    </div>
    <?php
        $post = \App\Tattoo::find(1);
        echo $post;
    ?>
</section>