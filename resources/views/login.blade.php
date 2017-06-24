<html>

<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
    {!! Html::style(asset('css/materialize.min.css')) !!}
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #fff;
        }

        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="section"></div>
    <main>
        <center>

            <h5 class="indigo-text">INICIAR SESION | COMIDAS TIPICAS</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    {{ Form::open(['method' => 'post', 'id' => 'frmLogin']) }}
                        <div class='row'>
                        <div class='col s12'>
                        </div>
                        </div>

                        <div class='row'>
                        <div class='input-field col s12'>
                            {{ Form::text('txtUsuario', null, ['id' => 'txtUsuario', 'class' => 'validate']) }}
                            <label for='email'>Ingrese Su Usuario</label>
                        </div>
                        </div>

                        <div class='row'>
                        <div class='input-field col s12'>
                            {{ Form::password('txtPassword', ['class' => 'validate', 'id' => 'txtPassword']) }}
                            <label for='password'>Ingrese Su Contrase&ntilde;a</label>
                        </div>
                        <label style='float: right;'>
                            <a class='pink-text' href='#!'><b>Olvido su contrase&ntilde;a?</b></a>
                        </label>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <a href="#" id="btnLogin" class="col s12 btn btn-large waves-effect indigo">
                                    ENTRAR
                                </a>
                            </div>
                        </center>
                    {{ Form::close() }}
                </div>
            </div>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>

    {{ Html::script(asset('js/jquery.js')) }}
    {{ Html::script(asset('js/materialize.min.js')) }}
    {{ Html::script(asset('js/login.js')) }}

</body>

</html>