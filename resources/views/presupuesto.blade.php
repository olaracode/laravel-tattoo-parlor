@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <section id="main" class="wrapper">
        <div class="container">
            <h2 align="center">Presupuestos</h2>
            <p align="justify">
                Los tatuajes al ser un servicio personalizado varían de precio dependiendo del diseño, tamaño y la persona.
                Los diseños siguientes son para que el cliente sepa cuanto puede esperar pagar por la idea que tiene en mente,
                el siguiente paso despues de consultar estos precios sería tener una idea clara de lo que se desea
                , buscar diseños que le agraden en plataformas como pinterest y contactar al artista que quiere que realice el trabajo
                y concretar entre los dos el diseño final.
            </p>
            <div align="center">
                <div class="row" style="margin-left: 30%;">
                    <br>
                    <div class="-4u(xsmall)">
                        <div>
                            <img src="images/tiny.png" style="width: 250px; height: 250px;">
                        </div>
                        <h5>Tatuajes pequeños 5cm - 10cm<br> Menos de una hora</h5>
                        <p><strong>Precio </strong></p>
                    </div>
                    <div class="-4u(xsmall)">
                        <div>
                            <img src="images/med.jpg" style="width: 250px; height: 250px;">
                        </div>
                        <h5>Tatuajes medianos 10-15cm<br>2 Horas aprox.</h5>
                        <p><strong>Precio </strong></p>
                    </div>
                    <div  class="-4u(xsmall)">
                        <div>
                            <img src="images/medd.jpg" style="width: 250px; height: 250px;">
                        </div>
                        <h5>Tatuajes Grandes 15-25cm<br>4 Horas aprox.</h5>
                        <p><strong>Precio </strong></p>
                    </div>
                    <div  class="-4u(xsmall)">
                        <div>
                            <img src="images/larg.jpg" style="width: 250px; height: 250px;">
                        </div>
                        <h5>Tatuajes por sesión 30cm o mas<br>Una sesión o mas(6 u 8 horas c/u)</h5>
                        <p><strong>Precio </strong></p>
                    </div>
                </div>
            </div>
            <br>
            <h3 align="center">Para mayor información contactenos a nuestro numero a traves de whatsapp<br>XXXX.XXX.XXXX</h3>
        </div>

    </section>