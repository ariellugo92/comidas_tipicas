{{ Form::open(['method' => $metodo, 'id' => 'frmRecetas', 'files' => true]) }}

{{ Form::hidden('tipo', $tipo) }}

<div class="row">
    <div class="input-field col s12">
      <input id="txtNombre" name="txtNombre" type="text" class="validate">
      <label for="email" data-error="wrong" data-success="right">{{ ucwords('nombre de la receta') }}</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      <textarea id="txtResenia" name="txtResenia" class="materialize-textarea"></textarea>
      <label for="textarea1">Haz una peque&ntilde;a rese&ntilde;a de la receta</label>
    </div>
</div>

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

<div class="file-field input-field">
    <div class="btn">
        <span>Archivo</span>
        <input type="file" id="fileImg" name="fileImg" multiple>
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Seleccione un archivo por favor!">
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      <textarea id="txtProcedimientos" name="txtProcedimientos" class="materialize-textarea"></textarea>
      <label for="textarea1">Agrega los procedimientos para realizar la receta</label>
    </div>
</div>

<div class="row center btn-form">
    <a href="#" id="btnAgregarReceta" class="btn">{{ $btn }}</a>
</div>

{{ Form::close() }}