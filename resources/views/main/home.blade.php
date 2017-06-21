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
        {{-- primera col (sobre nosotros) --}}
        <div class="row col-1">
            <div class="col s6">
                <div class="contenido container">
                    <h5 class="contenido-titulo">Nacatamal</h5>

                    <p class="contenido-parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sequi assumenda vel, placeat explicabo officia harum sint consectetur optio porro, dolore asperiores dicta recusandae iusto ab aut laborum non itaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum hic praesentium, accusamus eaque dolore tempora qui iure quis maiores corporis vitae cupiditate architecto et, quidem numquam mollitia repellat! Eveniet.</p>

                    <a href="#" class="btn contenido-boton">Leer Mas</a>
                </div>
            </div>
            <div class="col s6">
                <img class="responsive-img" src="https://www.visitanicaragua.com/wp-content/uploads/2014/12/Hay-Nacatamal.jpg">
            </div>
        </div>
        {{-- /primera col --}}

        {{-- segunda col (recetas) --}}
        <div class="row col-2">
            <div class="col s6">
                <img class="responsive-img" src="https://www.visitanicaragua.com/wp-content/uploads/2014/12/Hay-Nacatamal.jpg">
            </div>
            <div class="col s6">
                <div class="contenido container">
                    <h5 class="contenido-titulo">Nacatamal</h5>

                    <p class="contenido-parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sequi assumenda vel, placeat explicabo officia harum sint consectetur optio porro, dolore asperiores dicta recusandae iusto ab aut laborum non itaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum hic praesentium, accusamus eaque dolore tempora qui iure quis maiores corporis vitae cupiditate architecto et, quidem numquam mollitia repellat! Eveniet.</p>

                    <a href="#" class="btn contenido-boton">Leer Mas</a>
                </div>
            </div>
        </div>
        {{-- /segunda col --}}

        {{-- tercera col --}}
        <div class="row col-3">
            <div class="col s6">
                <div class="contenido container">
                    <h5 class="contenido-titulo">Nacatamal</h5>

                    <p class="contenido-parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sequi assumenda vel, placeat explicabo officia harum sint consectetur optio porro, dolore asperiores dicta recusandae iusto ab aut laborum non itaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum hic praesentium, accusamus eaque dolore tempora qui iure quis maiores corporis vitae cupiditate architecto et, quidem numquam mollitia repellat! Eveniet.</p>

                    <a href="#" class="btn contenido-boton">Leer Mas</a>
                </div>
            </div>
            <div class="col s6">
                <img class="responsive-img" src="https://www.visitanicaragua.com/wp-content/uploads/2014/12/Hay-Nacatamal.jpg">
            </div>
        </div>
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

@endsection