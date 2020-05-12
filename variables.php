<?php

#Variable numerica
$numero = 5;
echo "Esto es una variable numero: $numero <br>";

var_dump($numero);

echo "<br><br>";

#Variable texto
$palabra = "Palabra";
echo "Esto es una variable texto: $palabra <br>";

var_dump($palabra);

echo "<br><br>";

#Variable boleana
$boleana = true;
echo "Esto es una variable boleana true: $boleana. <br>";

var_dump($boleana);

echo "<br><br>";

#Variable arreglo
$colores = array("Rojo", "Amarillo");
echo "Esto es una variable arreglo: $colores[0] <br>";

var_dump($colores);

echo "<br><br>";

#Variable arreglo con propiedades
$verduras = array("Verdura1" => "Lechuga", "Verdura2" => "Cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[Verdura1] <br>";

var_dump($verduras);

echo "<br><br>";

#Variable objeto
$frutas = (object)["fruta1" => "Manzana", "fruta2" => "Pera"];
echo "Esto es una variable objeto: $frutas->fruta2 <br>";

var_dump($frutas);


?>