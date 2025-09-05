<?php

$capital = $_POST['capital'];
$taxa = $_POST['taxa'];
$anos = $_POST['anos'];
$i = 0;

$taxa = $taxa/100;

while ($i <= $anos) {
    $montante = $capital * (1 + $taxa);
    $i++;
    echo "O valor acumulado no $i é de $montante reais";
}

