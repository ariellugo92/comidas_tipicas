@extends('main.default')

@section('seccion-prin')
    
    <div class="lbl-titulo-add">
        <h5>Agregar una {{ $tipo }} a las recetas</h5>
    </div>
    
    <div class="container">
        @include('main.form', ['btn' => 'Agregar Receta', 'metodo' => 'post', 'tipo' => $tipo])
    </div>

@endsection