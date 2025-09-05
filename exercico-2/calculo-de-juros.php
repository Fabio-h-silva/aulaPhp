<?php

$capital = $_POST['capital'];
$taxa = $_POST['taxa'];
$anos = $_POST['anos'];
$i = 1;

echo "<h1>Resultado de Simulação</h1><br><br>";
echo "Capital Inicial: $capital <br><br>";
echo "Taxa de Juros: $taxa <br><br>";
echo "Duração: $anos <br><br>";


$taxa = $taxa/100;

while ($i <= $anos) {
    $montante = $capital * (1 + $taxa)**$i;
    echo "O valor acumulado no ano $i é de $montante reais <br>";
    $i++;
}
 echo "<br><a href='index.html'>Voltar</a>";
