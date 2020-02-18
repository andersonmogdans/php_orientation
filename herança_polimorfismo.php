<?php

//classe mãe ou superclasse
class Felino{

	var $mamifero = "Mamífero: sim";

	function correr(){
		echo "Velocidade: correr como Felino";
	}

}

//classe filha ou subclasse

class Chita extends Felino{

	//polimorfismo
	function correr(){
		echo "Velocidade: correr como Chita 100 KM/Hr";
	}
}

class Gato extends Felino{

	//polimorfismo
	function correr(){
		echo "Velocidade: correr como Gato 50 KM/Hr";
	}
}



$chita = new Chita();
$gato = new Gato();

echo $chita->mamifero . "<br>";
$chita->correr();

echo "<br><br>";

echo $gato->mamifero . "<br>";
$gato->correr();


?>