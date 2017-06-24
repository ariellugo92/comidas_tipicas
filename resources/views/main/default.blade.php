<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        {!! Html::style(asset('css/materialize.min.css')) !!}
        {!! Html::style(asset('css/main.css')) !!}

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        {{-- style propios --}}
        @section('seccion-styles')
            
        @show
    </head>

    <body>

        {{-- header --}}
        <div class="header">
            <div class="header-titulo center">
                <h1 class="titulo">COMIDAS TIPICAS</h1>
            </div>
            <nav class="nav-menu nav-center" role="navigation">
                <div class="nav-wrapper container">
                    <ul>
                        <li><a href="/">INICIO</a></li>
                        <li><a href="/recetas">RECETAS</a></li>
                        <li><a href="/qs">QUINES SOMOS</a></li>
                        <li><a href="/contacto">CONTACTANOS</a></li>
                        @if(session()->has('user_conectado'))
                            <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Administrador</a>
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!"><i class="material-icons">account_circle</i>{{ getDatosUsuarioConectado()->user }}</a></li>
                                <li><a href="#!"><i class="material-icons">assignment_turned_in</i>Rese&ntilde;as</a></li>
                                <li><a href="/cerrar_sesion"><i class="material-icons">power_settings_new</i>Salir</a></li>
                            </ul>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
        {{-- /header --}}

        @section('seccion-prin')
            
        @show

        {{-- footer --}}
        <footer class="page-footer">
            <div class="container">
            <div class="row">
                <div class="col l6 s12">
                <h5 class="white-text">COMIDAS TIPICAS</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to o</p>
                </div>
                <div class="col l4 offset-l2 s12">
                <h5 class="white-text">SIGUENOS</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
                </div>
            </div>
            </div>
            <div class="footer-copyright">
            <div class="container">
            © 2017 Todos los derechos reservados
            <a class="grey-text text-lighten-4 right" href="/login">Intranet</a>
            </div>
            </div>
        </footer>
        {{-- /footer --}}
    
        <!--Import jQuery before materialize.js-->
        {{ Html::script(asset('js/jquery.js')) }}
        {{ Html::script(asset('js/materialize.min.js')) }}
        {{ Html::script(asset('js/main.js')) }}
        @section('seccion-scripts')
            
        @endsection
    </body>
  </html>