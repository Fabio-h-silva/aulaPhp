<?php

$tarefas = $_POST['tarefas'];
$sprint = $_POST['sprint'];
$media = $_POST['media'];
$dias = $_POST['dias'];
$i = 0;

echo "<h1>Resultado de Simulação</h1><br><br>";
echo "<h2>Dados de Entrada</h2><br><br>";
echo "Tarefas no projeto: $tarefa <br><br>";
echo "Duração de cada sprint: $sprint dias<br><br>";
echo "Tarefas concluídas por sprint: $media <br><br>";
echo "Tempo total disponivel: $dias dias <br><br>";



while ( $sprint * $media  ) { 
    $i = $dias % $tarefas;
    $sprint = $sprint + $sprint;


}
