<?php

#funciones sin parametros
function saludo(){
    echo "Hola ANA <br>";
}
saludo();

#funciones con parametros
function despedida($adios){
    echo $adios."<br>";
}
despedida("Adios ANA");

#funciones con retorno
function retorno($retornar){
    return $retornar;
}
echo retorno("Esto es un retorno");

?>