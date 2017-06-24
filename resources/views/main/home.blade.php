@extends('main.default')

@section('seccion-styles')
    

    
@endsection

@section('seccion-prin')

    {{-- img principal --}}
    <div class="slider columna-prin">
        <ul class="slides">
            <li style="height: 100%;">
                <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li style="height: 100%;">
                <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li style="height: 100%;">
                <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li style="height: 100%;">
                <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>
    {{-- /img principal --}}

    @if(count($recetas) > 0)
        {{-- pre-main --}}
        <div class="pre-main">
            <div class="row pnl-pre-main">
                <div class="col s8">
                    <h3>RECETAS MAS BUSCADAS</h3>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">search</i>
                    <input placeholder="Buscar receta..." id="txtBusqueda" type="search" class="validate">
                </div>
            </div>
        </div>
        {{-- /pre-main --}}

        {{-- main --}}
        <div class="main">
            {{-- primera col --}}
            @if(isset($recetas[0]))
                <div class="row col-1">
                    <div class="col s6">
                        <div class="contenido container">
                            <h5 class="contenido-titulo">{{ ucwords($recetas[0]->nombre) }}</h5>

                            <p class="contenido-parrafo">{{ $recetas[0]->resenia }}</p>

                            <a href="#" class="btn contenido-boton">Leer Mas</a>
                        </div>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="{{ asset('recursos/img-recetas/' . $recetas[0]->url_img) }}">
                    </div>
                </div>
            @endif
            {{-- /primera col --}}

            {{-- segunda col --}}
            @if(isset($recetas[1]))
                <div class="row col-2">
                    <div class="col s6">
                        <img class="responsive-img" src="{{ asset('recursos/img-recetas/' . $recetas[1]->url_img) }}">
                    </div>
                    <div class="col s6">
                        <div class="contenido container">
                            <h5 class="contenido-titulo">{{ ucwords($recetas[1]->nombre) }}</h5>

                            <p class="contenido-parrafo">{{ $recetas[1]->resenia }}</p>

                            <a href="#" class="btn contenido-boton">Leer Mas</a>
                        </div>
                    </div>
                </div>
            @endif
            {{-- /segunda col --}}

            {{-- tercera col --}}
            @if(isset($recetas[2]))
                <div class="row col-3">
                    <div class="col s6">
                        <div class="contenido container">
                            <h5 class="contenido-titulo">{{ ucwords($recetas[2]->nombre) }}</h5>

                            <p class="contenido-parrafo">{{ $recetas[2]->resenia }}</p>

                            <a href="#" class="btn contenido-boton">Leer Mas</a>
                        </div>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="{{ asset('recursos/img-recetas/' . $recetas[2]->url_img) }}">
                    </div>
                </div>
            @endif
            {{-- /tercera col --}}
        </div>
        {{-- /main --}}

        {{-- testimonios --}}
        <div class="testimonios">

            <div class="row">
                <h3 class="center">Mira lo que opinan nuestros lectores!</h3>
            </div>

            <div class="carousel">
                <a class="carousel-item" href="#one!" style="width: 300px;">
                    <div class="row">
                        <div class="col s12 m5" style="width: 100%;">
                            <div class="card-panel teal">
                                <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                </span>
                                <span style="font-weight: bold;" class="text-right white-text"><br><br>Fulana de Tal, Restaurante X</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="#two!" style="width: 300px;">
                    <div class="row">
                        <div class="col s12 m5" style="width: 100%;">
                            <div class="card-panel teal">
                                <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                </span>
                                <span style="font-weight: bold;" class="text-right white-text"><br><br>Fulana de Tal, Restaurante X</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="#three!" style="width: 300px;">
                    <div class="row">
                        <div class="col s12 m5" style="width: 100%;">
                            <div class="card-panel teal">
                                <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                </span>
                                <span style="font-weight: bold;" class="text-right white-text"><br><br>Fulana de Tal, Restaurante X</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="#four!" style="width: 300px;">
                    <div class="row">
                        <div class="col s12 m5" style="width: 100%;">
                            <div class="card-panel teal">
                                <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                </span>
                                <span style="font-weight: bold;" class="text-right white-text"><br><br>Fulana de Tal, Restaurante X</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="#five!" style="width: 300px;">
                    <div class="row">
                        <div class="col s12 m5" style="width: 100%;">
                            <div class="card-panel teal">
                                <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                </span>
                                <span style="font-weight: bold;" class="text-right white-text"><br><br>Fulana de Tal, Restaurante X</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {{-- /testimonios --}}
    @else
        <div class="center">
            <h2>{{ ucwords('aun no hay recetas agregadas') }}</h2>
            @if(session()->has('user_conectado'))
                <p class="center">
                    <a href="/recetas/add/comida" class="btn">Agregar Receta De Comida</a>
                    <a href="/recetas/add/bebida" class="btn">Agregar Receta De Bebida</a>
                    <a href="/recetas/add/postre" class="btn">Agregar Receta De Postre</a>
                </p>
            @endif
        </div>
    @endif

@endsection