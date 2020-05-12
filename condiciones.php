<?php

#Condiciones
$a = 15;
$b = 10;

if($a > $b){
    echo "A es mayor que B";
}
else if($a == $b){
    echo "A es igual que B";
} 

else{
    echo "A es menor que B";
}

echo "<br><br>";

#Suiches
$dia = "sabado";

switch($dia){
    case "sabado":
    echo "Voy a estudiar php";
    break;

    case "viernes":
    echo "Voy a la fiesta ";
    break;

    case "domingo":
    echo "Voy a descansar";
    break;
    
    default: echo "Voy a la universidad"; 
}

echo "<br><br>";

#ciclo while
$n = 1;

while($n <= 5){
    echo $n;
    $n ++;   
}

echo "<br><br>";

#ciclo do while
$p = 1;

do{
    echo $p;
    $p ++;
}
while($p <= 5);

echo "<br><br>";

#ciclo for
for ($i = 1; $i <= 5; $i ++){
    echo $i;
}

?>