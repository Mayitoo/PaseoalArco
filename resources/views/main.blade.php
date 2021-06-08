@extends('layouts.app')

@section('assets')
 <style>
    .carousel-inner {
        text-shadow: 1px 1px #000;
    }
 </style>
@endsection

@section('content')  
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <section class="carousel-inner">
        <article class="carousel-item active">
        <img class="d-block w-100" src="{{asset('images/carousel/fashion-111.jpg')}}" alt="First slide">
        <article class="carousel-caption d-none d-md-block">
            <h3 class="carousel"><a href="{{route('women')}}">Paseos en lancha</a></h3>
            <h5>Disfruta la mejor aventura de pasear en lancha con tus eres queridos </h5>
        </article>
        </article>
        <article class="carousel-item">
        <img class="d-block w-100 height: 200px" src="{{asset('images/carousel/fashion-2.jpg')}}" alt="Second slide">
        <article class="carousel-caption d-none d-md-block">
        <h3 class="carousel"><a href="{{route('men')}}">Paseo en yate</a></h3>
        <h5>Para este verano, disfuta co tus seres queridos un paseo al Arco </h5>
        </article>
        </article>
        <article class="carousel-item">
        <img class="d-block w-100 height: 200px" src="{{asset('images/carousel/fashion-3.jpg')}}" alt="Third slide">
        <article class="carousel-caption d-none d-md-block">
            <h3 class="carousel"><a href="{{route('kids')}}">Baja california Sur</a></h3>
            <h5>Una de las Mejores Playas del Mundo </h5>
        </article>
        </article>
    </section>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class='container-fluid p-5 bg-light'> 
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <article class="row">
            <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-1.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Playa de Los Cabos</h2>
                <p> Los Cabos es uno de los cinco municipios del estado de Baja California Sur, México, y se localiza en el extremo sur del estado. La cabecera municipal es San José del Cabo y la ciudad más importante es Cabo San Lucas a 32 km de la cabecera. Esta área es uno de los destinos turísticos más importantes de México<p><a class="btn btn-dark" href="#" role="button">Ver más&raquo;</a></p>
            </section><!-- /.col-lg-4 -->
            <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-2.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>EL arco de los cabos</h2>
                <p>El Arco de Cabo San Lucas es una formación rocosa, específicamente un arco natural, en el Cabo San Lucas, que es el extremo sur de la Península de Baja California. Muchos sostienen que tiene el aspecto de un triceratops tomando agua. El arco separa el golfo de California del océano Pacífico.</p>
                <p><a class="btn btn-dark" href="#" role="button">Ver más&raquo;</a></p>
            </section><!-- /.col-lg-4 -->
            <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-3.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Buseo</h2>
                <p> El Arco de Cabo San Lucas es una formación rocosa, específicamente un arco natural, en el Cabo San Lucas, que es el extremo sur de la Península de Baja California. Muchos sostienen que tiene el aspecto de un triceratops tomando agua. El arco separa el golfo de California del océano Pacífico.  </p>
            <p><a class="btn btn-dark" href="#" role="button">Ver más&raquo;</a></p>
            </section><!-- /.col-lg-4 -->
        </article><!-- /.row -->
    </div>
</div>
@endsection
