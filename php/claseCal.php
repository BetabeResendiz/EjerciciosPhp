<?php

class Calculadora{
	public function calcularDatos($val1,$val2,$opcion){
		switch ($opcion) {
			case 'suma':
				# code...
			return $val1 + $val2;
				break;
			case 'resta':
			return $val1 - $val2;
				break;
			case 'division':
				# code...
			return $val1 / $val2;
				break;
			case 'multiplicacion':
				# code...
			return $val1 * $val2; 
				break;

			default:
				# code...
				break;
		}
	}
}


