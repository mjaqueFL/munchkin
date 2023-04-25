<?php

$nombre = $_POST['nombre'];
$raza = $_POST['raza'];

echo generarRespuesta($nombre, $raza);

/**
 * Genera la respuesta que vamos a enviar al cliente.
 *
 * Primero comprueba la longitud del nombre.
 * Concatena el nombre con la raza y lo devuelve.
 * @param $name {String} Nombre del jugador 
 * @param $race {String} Raza del jugador
 * @return {String} Texto de la respuesta
 * */
function generarRespuesta($name, $race){
	if (strlen($name) < 3)
		$respuesta= 'El nombre es demasiado corto';
	else
		$respuesta = "Hola $name. Eres un/a $race.";
	return $respuesta;
}

