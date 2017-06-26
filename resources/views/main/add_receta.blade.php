@extends('main.default')

@section('seccion-prin')
    
    <div class="lbl-titulo-add">
        @if($tipo == 'postre')
            <h5>{{ ucwords($accion . ' un ' . $tipo . ' a las recetas') }}</h5>
        @else
            <h5>{{ ucwords($accion . ' una ' . $tipo . ' a las recetas') }}</h5>
        @endif
    </div>
    
    <div class="container">
        @include('main.form', ['accion' => $accion, 'metodo' => 'post', 'tipo' => $tipo, 'receta' => $receta])
    </div>

@endsection