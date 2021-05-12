<?php
$a = 2;
$b = 3;
$c = 2;
function numeros($a,$b,$c){
    if($a + $b < $c){
    echo "Não é maior";
    }else{
        echo "è maior";
    }
}



$semaforo = "vermelho";
if($semaforo == "verde"){
    echo "Pode passar";
}else{
    echo "Pare";
}
$passos = 50;
function gastoCaminhada($passos){
    $total = 0;
    for ($i=0; $i < $passos; $i++) { 
        $total = $total + $i * 2;
    }return $total;
}

echo gastoCaminhada($passos);