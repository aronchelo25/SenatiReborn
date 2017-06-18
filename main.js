$(function()){

};

function buscar_datos(consulta){
	$ajav({
		url: "App/buscar.php",
		type: "POST",
		dataType: "php",
		data: {consulta: consulta}
	})
	.done(function(respuesta) {
		$("#datos").php(respuesta);
	})
	.fail(function() {
		console.log("error");
	})
}

$(document).on('keyup','#caja_busqueda', function()){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
}};