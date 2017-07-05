@extends('main.default')

@section('seccion-prin')

    @if(session()->has('val'))
        <script>
            alert('La reseña se modifico correctamente!');
        </script>
    @endif

    <div class="row center">
        <h4>GESTION DE RESE&Ntilde;AS</h4>
    </div>

    {{-- formulario de testimonios --}}
    <div class="row center">
        {{ dd($resenia) }}
        {{ Form::open(['url' => '/resenias/' . $resenia->id, 'id' => 'frmResenias', 'class' => 'container', 'method' => 'put']) }}

            <div class="row">
                <div class="col s12 m6">
                    <div class="input-field col s12">
                        {{ Form::text('txtAutor', $resenia->autor, ['class' => 'validate']) }}
                        <label for="email" data-error="wrong" data-success="right">{{ ucwords('autor de la reseña') }}</label>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="input-field col s12">
                        {{ Form::text('txtRestaurante', $resenia->restaurante, ['class' => 'validate']) }}
                        <label for="email" data-error="wrong" data-success="right">{{ ucwords('restaurante') }}</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{ Form::textarea('txtTextoResenia', $resenia->resenia, ['class' => 'materialize-textarea']) }}
                    <label for="textarea1">Escribe Tu Rese&ntilde;a Aqui</label>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="MODIFICAR RESEÑA" class="btn">
            </div><br><br><hr><br>

        {{ Form::close() }}
    </div>

    {{-- mostrando las resenias --}}
    <div class="row center">
        <h4>TODAS LAS RESE&Ntilde;AS</h4>
    </div>

    @if(count($resenias) > 0)
        {{-- tabla de las resenias --}}
        <div class="container">
            <table class="striped centered">
                <thead>
                <tr>
                    <th>Autor</th>
                    <th>Restaurante</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($resenias as $resenia_all)
                        <tr>
                            <td>{{ $resenia_all->autor }}</td>
                            <td>{{ $resenia_all->restaurante }}</td>
                            <td>
                                <a href="/resenias/{{ $resenia_all->id }}">Modificar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="row center">
            <h5>AUN NO HAY RESE&Ntilde;AS AGREGADAS</h5>
        </div>
    @endif
    
@endsection