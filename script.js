'use strict'

/**
  Valida que los campos del formulario cumplan las reglas establecidas.
  @return {boolean} True si cumple las reglas, false en caso contrario.
**/
function validarFormulario() {
	var nombre = document.querySelector('input').value;
	var raza = document.querySelector('select').value;
	
	if (nombre.length < 3) {
		alert('El nombre debe tener al menos 3 caracteres.');
		return false;
	}
	
	return true;
}
