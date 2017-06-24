@extends('main.default')

@section('seccion-prin')

    <div class="titulo-contacto row center">
        <h5>{{ ucwords('mandanos un mensaje para ponernos en contacto contigo') }}</h5>
    </div>

    <div class="container">
        {{ Form::open(['method' => 'post', 'id' => 'frmContacto']) }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="txtNombre" name="txtNombre" type="text" class="validate">
                    <label for="email" data-error="wrong" data-success="right">{{ ucwords('ingrese su nombre') }}</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="txtEmail" name="txtEmail" type="email" class="validate">
                    <label for="email" data-error="wrong" data-success="right">{{ ucwords('ingrese su correo') }}</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea style="height: 100px;" id="txtProcedimientos" name="txtProcedimientos" class="materialize-textarea"></textarea>
                    <label for="textarea1">{{ ucwords('exprese aqui lo que quiere saber de nosotros y en unos momentos te responderemos!') }}</label>
                </div>
            </div>

            <div class="row center">
                <a href="#" class="btn">ENVIAR MENSAJE</a>
            </div>
        {{ Form::close() }}
    </div>
    
@endsection