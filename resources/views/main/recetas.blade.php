@extends('main.default')

@section('seccion-styles')
    

    
@endsection

@section('seccion-prin')
    
    <div class="row all-recetas">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#test1">COMIDAS</a></li>
                <li class="tab col s3"><a href="#test2">BEBIDAS</a></li>
                <li class="tab col s3"><a href="#test4">POSTRES</a></li>
            </ul>
        </div>
        {{-- COMIDAS --}}
        <div id="test1" class="col s12">

            <div class="col s12">
                <h4 class="center tab-titulo">COMIDAS TIPICAS NACIONALES</h4>
            </div>
            {{-- este div se mostrara solo si estan logueado --}}
            <div class="col s12 right-align opc-admin">
                <a href="/recetas/add/comida" class="btn">Agregar Receta</a>
            </div>
            <hr>
            {{-- /div-add --}}

            <div class="card col s12 m4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

                    <p><a href="#!">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>

                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>

            <div class="card col s12 m4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

                    <p><a href="#!">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>

                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>

            <div class="card col s12 m4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

                    <p><a href="#!">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>

                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>

            <div class="card col s12 m4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

                    <p><a href="#!">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>

                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>

            <div class="card col s12 m4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

                    <p><a href="#!">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>

                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>

            <div class="card col s12 m4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

                    <p><a href="#!">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>

                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>

            <div class="card col s12 m4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

                    <p><a href="#!">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>

                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        {{-- /COMIDAS --}}

        {{-- BEBIDAS --}}
        <div id="test2" class="col s12">

        </div>
        {{-- /BEBIDAS --}}

        {{-- POSTRES --}}
        <div id="test4" class="col s12">

        </div>
        {{-- /POSTRES --}}
    </div>

@endsection