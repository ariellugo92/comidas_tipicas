{{ Form::open(['id' => 'frmRecetas', 'files' => true]) }}

{{ Form::hidden('tipo', $tipo) }}

<div class="row">
    <div class="input-field col s12">
        {{ Form::text('txtNombre', $receta->nombre, ['class' => 'validate']) }}
        <label for="email" data-error="wrong" data-success="right">{{ ucwords('nombre de la receta') }}</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        {{ Form::textarea('txtResenia', $receta->resenia, ['class' => 'materialize-textarea']) }}
        <label for="textarea1">Haz una peque&ntilde;a rese&ntilde;a de la receta</label>
    </div>
</div>

@if($accion == 'agregar')
    <div class="row">
        <div class="col m11">
            <div class="input-field">
                <input id="txtIngrediente" type="text" class="validate">
                <label for="icon_prefix">Agregue un ingrediente</label>
            </div>
        </div>
        <div style="padding-top: 10px;" class="col m1">
            <a href="#" id="btnAddIngrediente" class="btn-floating"><i class="material-icons prefix">add</i></a>
        </div>
    </div>

    {{-- aqui se van agregando los ingredientes --}}
    <div class="form-ingredientes">
        <p>Ingredientes: </p>
        <div class="row ingredientes" id="pnl-ingredientes">
            
        </div>
    </div>

    {{-- agregando la foto --}}
    <div class="file-field input-field">
        <div class="btn">
            <span>Archivo</span>
            <input type="file" id="fileImg" name="fileImg" multiple>
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Seleccione un archivo por favor!">
        </div>
    </div>
@else
    {{ Form::hidden('lblIdReceta', $receta->id, ['id' => 'lblIdReceta']) }}
    <div class="row">
        <p>Ingredientes agregados</p>
    </div>
    {{-- mostrando los ingredientes en una tabla --}}
    <div class="row">
        <div class="col s12 m12">
            <table class="centered responsive-table highlight">
                <thead>
                    <tr>
                        <th>Ingrediente</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <tbody>
                    @if(isset($ingredientes))
                        @foreach($ingredientes as $ingrediente)
                            <tr>
                                <td>{{ $ingrediente->ingrediente }}</td>
                                <td>
                                    <a href="#" class="btn">Modificar</a>
                                    <a href="#" class="btn">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <a href="#">Agregar Uno Mas</a>
    </div>

    <br><hr>
    {{-- si quiere cambiar la foto --}}
    <div class="row center"><a href="#" class="btn">Cambiar Imagen De La Receta</a></div>
    <hr><br>
@endif

<div class="row">
    <div class="input-field col s12">
        {{ Form::textarea('txtProcedimientos', $receta->procedimiento, ['class' => 'materialize-textarea']) }}
        <label for="textarea1">Agrega los procedimientos para realizar la receta</label>
    </div>
</div>

<div class="row center btn-form">
    <a href="#" id="btnAgregarReceta" class="btn">{{ ucwords($accion . ' Receta') }}</a>
</div>

{{ Form::close() }}