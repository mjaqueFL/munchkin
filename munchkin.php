<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Obtener los datos del formulario
	$nombre = $_POST['nombre'];
	$raza = $_POST['raza'];

	// Enviar la respuesta
	echo generarRespuesta($nombre, $raza);
}

function generarRespuesta($nombre, $raza){
	
	if (strlen($nombre) >= 3) {
		// Generar la respuesta
		$respuesta = "Hola $nombre. Eres un $raza.";
	} else {
		// Si el nombre no tiene la longitud adecuada, generar un mensaje de error
		$respuesta = "El nombre debe tener al menos 3 caracteres.";
	}

	return $respuesta;
}
