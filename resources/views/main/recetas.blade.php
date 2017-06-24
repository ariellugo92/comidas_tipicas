@extends('main.default')

@section('seccion-styles')
    

    
@endsection

@section('seccion-prin')
    
    <div class="row all-recetas">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#test1">COMIDAS</a></li>
                <li class="tab col s3"><a href="#test2">BEBIDAS</a></li>
                <li class="tab col s3"><a href="#test4">POSTRES</a></li>
            </ul>
        </div>

        {{-- mensaje de alerta --}}
        <div class="mensaje">
            @if(isset($success_tipo))
                <p>Se guardo correctamente</p>
            @endif
        </div>

        {{-- COMIDAS --}}
        <div id="test1" class="col s12">

            <div class="col s12">
                <h4 class="center tab-titulo">COMIDAS TIPICAS NACIONALES</h4>
            </div>
            @if(session()->has('user_conectado'))
                {{-- este div se mostrara solo si estan logueado --}}
                <div class="col s12 right-align opc-admin">
                    <a href="/recetas/add/comida" class="btn">Agregar Comida</a>
                </div>
                <hr>
                {{-- /div-add --}}
            @endif

            @foreach($recetas as $receta)
                @if($receta->tipo == 0)
                    
                    <div class="card col s12 m4">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img width="600" height="300" class="activator" src="{{ asset('recursos/img-recetas/' . $receta->url_img) }}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ $receta->nombre }}<i class="material-icons right">more_vert</i></span>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $receta->nombre }}<i class="material-icons right">close</i></i></span>
                            <p>{{ $receta->resenia }}</p>
                        </div>

                        <div class="card-action">
                            <a href="#">Modificar</a>
                            <a href="/recetas/{{ $receta->id }}">Ver Mas</a>
                        </div>
                    </div>

                @endif
            @endforeach

        </div>
        {{-- /COMIDAS --}}

        {{-- BEBIDAS --}}
        <div id="test2" class="col s12">

            <div class="col s12">
                <h4 class="center tab-titulo">BEBIDAS TIPICAS NACIONALES</h4>
            </div>
            @if(session()->has('user_conectado'))
                {{-- este div se mostrara solo si estan logueado --}}
                <div class="col s12 right-align opc-admin">
                    <a href="/recetas/add/bebida" class="btn">Agregar Bebida</a>
                </div>
                <hr>
                {{-- /div-add --}}
            @endif

            @foreach($recetas as $receta)
                @if($receta->tipo == 1)
                    
                    <div class="card col s12 m4">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img width="600" height="300" class="activator" src="{{ asset('recursos/img-recetas/' . $receta->url_img) }}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ $receta->nombre }}<i class="material-icons right">more_vert</i></span>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $receta->nombre }}<i class="material-icons right">close</i></i></span>
                            <p>{{ $receta->resenia }}</p>
                        </div>

                        <div class="card-action">
                            <a href="#">Modificar</a>
                            <a href="/recetas/{{ $receta->id }}">Ver Mas</a>
                        </div>
                    </div>

                @endif
            @endforeach

        </div>
        {{-- /BEBIDAS --}}

        {{-- POSTRES --}}
        <div id="test4" class="col s12">

            <div class="col s12">
                <h4 class="center tab-titulo">POSTRES TIPICOS NACIONALES</h4>
            </div>
            @if(session()->has('user_conectado'))
                {{-- este div se mostrara solo si estan logueado --}}
                <div class="col s12 right-align opc-admin">
                    <a href="/recetas/add/postre" class="btn">Agregar Postre</a>
                </div>
                <hr>
                {{-- /div-add --}}
            @endif

            @foreach($recetas as $receta)
                @if($receta->tipo == 2)
                    
                    <div class="card col s12 m4">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img width="400" height="300" class="activator" src="{{ asset('recursos/img-recetas/' . $receta->url_img) }}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ $receta->nombre }}<i class="material-icons right">more_vert</i></span>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $receta->nombre }}<i class="material-icons right">close</i></i></span>
                            <p>{{ $receta->resenia }}</p>
                        </div>

                        <div class="card-action">
                            <a href="#">Modificar</a>
                            <a href="/recetas/{{ $receta->id }}">Ver Mas</a>
                        </div>
                    </div>

                @endif
            @endforeach

        </div>
        {{-- /POSTRES --}}
    </div>

@endsection