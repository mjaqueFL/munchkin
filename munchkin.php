<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Obtener los datos del formulario
	$nombre = $_POST['nombre'];
	$raza = $_POST['raza'];

	// Validar los datos del formulario
	if (strlen($nombre) >= 3) {
		// Generar la respuesta
		$respuesta = "Hola $nombre. Eres un $raza.";
	} else {
		// Si el nombre no tiene la longitud adecuada, generar un mensaje de error
		$respuesta = "El nombre debe tener al menos 3 caracteres.";
	}

	// Enviar la respuesta
	echo $respuesta;
}
