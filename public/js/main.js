$(document).ready(function(){
	$('.slider').slider();
	$('.carousel').carousel();
	$('ul.tabs').tabs();
	
	var altura = $('.nav-menu').offset().top;
	var arr_ingredientes = new Array();
	
	// metodo para fixear el menu
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.nav-menu').addClass('menu-fixed');
		} else {
			$('.nav-menu').removeClass('menu-fixed');
		}
	});

	// cuando agreguen un ingrediente
	$('#btnAddIngrediente').click(function (e) { 
		e.preventDefault();
		
		// obtenemos el texto del ingrediente
		var ingrediente = $('#txtIngrediente').val();
		if(ingrediente == ''){
			return;
		}

		// lo aniadimos a un arreglo
		arr_ingredientes.push(ingrediente);
		var html = '<p>'+
						'<input type="checkbox" class="filled-in" id="check'+ ingrediente +'" checked="checked" value="'+ ingrediente +'" />'+
						'<label for="filled-in-box">' + ingrediente + '</label>'+
					'</p>';
		// lo cargamos al panel de los checkbox
		$('#pnl-ingredientes').append(html);
		// limpiamos el textbox
		$('#txtIngrediente').val('');
		// obtenemos el foco
		$('#txtIngrediente').focus();
	});

	// cuando le den click al agregar la receta
	$('#btnAgregarReceta').click(function (e) { 
		e.preventDefault();

		// verificamos que los datos esten llenos
		if($('#txtNombre').val() == '' || $('#txtResenia').val() == '' || $('#txtProcedimientos').val() == ''){
			//mostrar error de cosas vacias
			console.log('no has agregado nada');
			return;
		}
		
		// apuntamos a la ruta donde ira al php
		var accion = $('#btnAgregarReceta').text().toLowerCase();
		// si es modificar obtenemos el id
		var id_modificar = $('#lblIdReceta').val();

		var url = (accion == 'agregar receta') ? '/recetas' : '/recetas/' + id_modificar;
		// obtenemos los datos del formulario
		var formData = new FormData($('#frmRecetas')[0]);
		// obtenemos el token que genera laravel
		var token = $("input[name=_token").val();
		// aniadimos a los datos los ingredientes
		formData.append('ingredientes', arr_ingredientes);
		// metodo de la peticion http via ajax
		var metodo = (accion == 'agregar receta') ? 'post' : 'put';

		// enviamos la peticion por ajax
		$.ajax({
			type: metodo, // tipo de peticion
			url: url, // url del php
			data: formData, // datos a enviar
			headers: { 'X-CSRF-TOKEN': token }, // token de seguridad
			contentType: false, // false porque se enviaran imagenes por ajax
    		processData: false, // para que no procese lo datos y deje enviar las imagenes
			beforeSend: function(){ // funcion antes de enviar los datos
				console.log('enviando');
			},
			success: function (response) { // funcion si todo salio bien
				console.log(response.val);
				// si es success quiere decir que se guardo
				if(response.val == 'success'){
					// redireccionamos a donde estan todas las recetas
					$(location).attr('href', '/recetas');
					alert('la receta se guado correctamente!')
				}
			},
			error: function(response){ // funcion si ocurre un error
				console.log(response);
			}
		}); // fin ajax
	}); // fin evento
 
}); // fin document