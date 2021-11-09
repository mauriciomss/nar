<?php

// override core en language system validation or define your own en language validation message
//return [];


return [
    //'min_length'  => 'El valor suministrado ({value}) para {field} debe tener al menos {param} caracteres.' ,

	'required' => 'El campo {field} es obligatorio.',
	'isset' => 'El campo {field} debe contener un valor.',
	'valid_email' => 'El campo {field} debe contener una dirección de correo válida.',
	'valid_emails' => 'El campo {field} debe contener todas las direcciones de correo válidas.',
	'valid_url' => 'El campo {field} debe contener una URL válida.',
	'valid_ip' => 'El campo {field} debe contener una dirección IP válida.',
	'min_length' => 'El campo {field} debe contener al menos {param} caracteres de longitud.',
	'max_length' => 'El campo {field} no debe exceder los {param} caracteres de longitud.',
	'exact_length' => 'El campo {field} debe tener exactamente {param} carácteres.',
	'alpha' => 'El campo {field} sólo puede contener carácteres alfabéticos.',
	'alpha_numeric' => 'El campo {field} sólo puede contener carácteres alfanuméricos.',
	'alpha_dash' => 'El campo {field} sólo puede contener carácteres alfanuméricos, guiones bajos _ o guiones -.',
	'numeric' => 'El campo {field} sólo puede contener números.',
	'is_numeric' => 'El campo {field} sólo puede contener carácteres numéricos.',
	'integer' => 'El campo {field} debe contener un número entero.',
	'regex_match' => 'El campo {field} no tiene el formato correcto.',
	'matches' => 'Las contraseñas no coinciden, por favor revisa.',
	'is_natural' => 'El campo {field} debe contener sólo números positivos.',
	'is_natural_no_zero' => 'El campo {field} debe contener un número mayor que 0.',
	'decimal' => 'El campo {field} debe contener un número decimal.',
	'less_than' => 'El campo {field} debe contener un número menor que {param}.',
	'greater_than' => 'El campo {field} debe contener un número mayor que {param}.',
	/* Added after 2.0.2 */
	'is_unique' => 'Ya existe el email ingresado en la base de datos.', //'El campo {field} debe contener un valor único.',

];
