<?php
//operaciones que se deben ejecutar para los calculos.
//creaion de la clase 
class factorial{
	//declaracion de variables

	private $num, $resultado, $imp;


public function setvalor($num){
	$this->num=$num;
	$this->resultado=1;
	$this->imp=$num;

}
public function CalculaFactorial(){
	while($this->num>0){
		$this->resultado=$this->resultado*$this->num;
		$this->num--;
	}
}
public function Getvalor(){
	echo 'El factorial de' .$this->imp. 'es:' .$this->resultado;
    }
  
}
?>