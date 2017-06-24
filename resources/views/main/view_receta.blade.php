@extends('main.default')

@section('seccion-prin')

    <div class="row titulo-view-receta center">
        <h2>{{ strtoupper($receta->nombre) }}</h2>
    </div>

    <div class="row">
        {{-- imagen lado izquierdo --}}
        <div class="col s12 m6 center">
            <img width="500" src="{{ asset('recursos/img-recetas/' . $receta->url_img) }}" alt="">
        </div>
        {{-- ingredientes y preparacion--}}
        <div class="col s12 m6">
            <div class="ingredientes">
                <p>Ingredientes:</p>
                @foreach($r_i as $ingrediente)
                    <p class="valign-wrapper">
                        <i style="font-size: 18px;" class="material-icons">radio_button_checked</i> 
                        &nbsp; {{ $ingrediente->ingrediente }}
                    </p>
                @endforeach
            </div>
            <hr>
            <div class="preparacion">
                <p>Preparacion:</p>
                <p class="texto-preparacion">
                    {{ $receta->procedimiento }}
                </p>
            </div>
        </div>
    </div>
    
@endsection