<?php
$tarifaBase = $_POST['tarifa'];
$tipo = $_POST['tipo'];
$distancia = $_POST['distancia'];

$tipo = strtolower($tipo);
$total = 0;

switch ($tipo) {
    case "estudante":
    $total = $tarifaBase * $distancia;
    $total = $total / 2;
    echo "O valor da tarifa para estudante é $total reais";
    break;
    case "idoso":
    $total = $tarifaBase * $distancia;
    $total = ($total/100)*70;
    echo "O valor da tarifa para idoso é $total reais";
    break;
    case "trabalhador":
    $total = $tarifaBase * $distancia;
    echo "O valor da tarifa para trabalhador é $total reais";
    break;
    case "turista":
    $total = $tarifaBase * $distancia;
    $total = ($total/100)*120;
    echo "O valor da tarifa para turista é $total reais";
    break;
    case "pcd":
    echo "O valor da tarifa para pcd é isenta";
    break;
    
    }