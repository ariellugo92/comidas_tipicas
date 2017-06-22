@extends('main.default')

@section('seccion-prin')
    
    <div class="tab-titulo">
        Agregar una {{ $tipo }} a las recetas
    </div>
    
    <div class="container">
        @include('main.form', ['btn' => 'Agregar Receta', 'metodo' => 'post', 'tipo' => $tipo])
    </div>

@endsection