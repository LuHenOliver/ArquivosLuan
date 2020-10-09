<?php

$combustivel = $_REQUEST["tanque"];
$consumo = $_REQUEST["consumo"];
$distTotal = 384400;
$parada = 15376;
$tanque = $combustivel;
$consu = array();
$dist = array();

if (($consumo * 25) > $combustivel){
    echo "Combustível insuficiente!";
    echo "Fim da viagem!";
    header("location: erro.html");
    exit();
}
for ($i=0; $i<25; $i++){
    $dist[$i] = $parada + $dist[$i]; 
    $consu[$i] = $combustivel - ($parada * ($i+1));
    $tanque = $tanque - $consu[$i]; 
    }
echo "<prev>";
echo "Quantidade restante= " . $tanque;
echo "Histórico de consumo de combustivel= " . $consu[$i] . "<br>" . "Distância percorrida= " . $dist[$i];
echo "<prev/>";
header("location: decolou.html");
?>
