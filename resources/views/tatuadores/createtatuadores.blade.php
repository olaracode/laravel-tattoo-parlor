@extends('layouts.admin')
@section('content')
    <section id="main" class="wrapper">
        <div class="container">
            <h2 align="center">Añadir artista</h2>
            <form method="post" action="/tatuadores">
                @csrf
                <div class="row uniform 50%">
                    <div class="12u$">
                        <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre del tatuador">
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