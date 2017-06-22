{{ Form::open(['method' => $metodo]) }}

{{ Form::hidden($tipo) }}

<div class="row">
    <div class="input-field col s12">
      <input id="email" type="email" class="validate">
      <label for="email" data-error="wrong" data-success="right">{{ ucwords('nombre de la receta') }}</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      <textarea id="textarea1" class="materialize-textarea"></textarea>
      <label for="textarea1">Haz una peque&ntilde;a rese&ntilde;a de la receta</label>
    </div>
</div>

<div class="row">
    <div class="col m11">
        <div class="input-field">
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Agregue un ingrediente</label>
        </div>
    </div>
    <div style="padding-top: 10px;" class="col m1">
        <a href="#" class="btn-floating"><i class="material-icons prefix">add</i></a>
    </div>
</div>

{{-- aqui se van agregando los ingredientes --}}
<br>
<div class="row ingredientes" id="pnl-ingredientes">
    <p>
        <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
        <label for="filled-in-box">Filled in</label>
    </p>
</div><br>

<div class="file-field input-field">
    <div class="btn">
        <span>Archivo</span>
        <input type="file" multiple>
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Seleccione un archivo por favor!">
    </div>
</div>

{{ Form::close() }}