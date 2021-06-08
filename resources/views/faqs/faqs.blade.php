@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/faq.css')}}">
@endsection

@section('content')
<div class="container-fluid mb-3">
    <div class="title-container">
        <h1>Preguntas Frecuentes</h1>
    </div>

    <main id="main" class="main-container">
        
        <section class="section-container">
            <article class="article-title">
                <h2>¿Uanto timpo dura el paseo?</h2>
            </article>
            <article class="respuesta">
                <p>Espor horas contratado.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>¿Puedo reservar un yate para una fieta?</h2>
            </article>
            <article class="respuesta" >
                <p>si, peudes reservarlo </p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>¿Donde me me puedo conmunicar ?</h2>
            </article>
            <article class="respuesta">
                <p>4741481482.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>¿aprtir de cunatoas años pagan pasaje ?</h2>
            </article>
            <article class="respuesta" >
                <p>tenemos dos precios niños de $400 y adultos de $600 los niños pagan apartir de 4 años y como adulto pagan de 12 años </p>
            </article>
        </section>

       

        
    </main>
</div>
@endsection