@extends('layouts.admin')
@section('content')
    <section id="main" class="wrapper">
        <div class="container">
            <h2 align="center">Administración de la pagina</h2>
            <div class="row 50% uniform">
                <div class="4u" align="center">
                    <span class="image fit"><img src="/images/newtat.jpg"></span>
                    <a href="tattoos/createtattoo">Nuevo Tatuaje</a>
                </div>
                <div class="4u" align="center">
                    <span class="image fit"><img src="/images/machine.jpg"></span>
                    <a href="tatuadores/createtatuadores">Nuevo Artista/Tatuador</a>
                </div>
                <div class="4u" align="center">
                    <span class="image fit"><img src="/images/agenda.jpg"></span>
                    <a href="#">Agenda</a>
                </div>
            </div>
        </div>
    </section>