@extends('main.default')

@section('seccion-prin')
    <h1>hola mundo</h1>
    @if(isset($users))
        {{$users->user}}
    @endif
@endsection