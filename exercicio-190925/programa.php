<?php

$divida = $_POST['divida'];
$parcela = $_POST['parcela'];

$valorParcela = $divida / $parcela;

for($i = 1; $i <= $parcela; $i++) {
    echo"Parcela $i de $parcela - Valor: R$ $valorParcela - Saldo apos pagamento R$ " .number_format($divida = $divida - $valorParcela, 2, ',', '.'). "<br>";
};
