$(document).ready(function () {
    
    // cuando le hagan click al boton
    $('#btnLogin').click(function (e) { 
        e.preventDefault();
        
        accessLogin();
    });

    // funcion para validar el login
    function accessLogin(){
        // obteniendo los datos
        var usuario = $('#txtUsuario').val();
        var pass = $('#txtPassword').val();

        // validando que los datos no esten vacios
        if(usuario == '' && pass == ''){
            // si los datos estan vacios
            return;
        }

        // obteniendo los datos necesarios para el ajax
        var formulario = $('#frmLogin').serialize();
        var ruta = '/login_validacion';
        var token = $('input[name=_token').val();

        // haciendo la peticion ajax
        $.ajax({
            type: "post",
            url: ruta,
            data: formulario,
            headers: {'X-CSRF-TOKEN': token},
            dataType: "json",
            beforeSend: function(){
                // antes de enviar la solicitud
                console.log('enviando');
            },
            success: function (response) {
                // al obtener una respuesta positiva
                console.log(response);
                if(response.val == 'true'){
                    // si response.val vale true lo mandamos a la raiz
                    $(location).attr('href', '/');
                }
            },
            error: function(response){
                // si ocurrio un error
            }
        });
    }


});