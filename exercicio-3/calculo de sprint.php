<?php

$totalTarefa = $_POST['totalTarefa'];
$duracaoSprint = $_POST['duracaoSprint'];
$medioSprint = $_POST['medioSprint'];
$diasDisponiveis = $_POST['diasDisponiveis'];

$sprintConcluida = 0;
$tarefaConcluida = 0;

// Enquanto ainda houver dias disponíveis e tarefas a fazer
while ($diasDisponiveis >= $duracaoSprint && $tarefaConcluida < $totalTarefa) {
    // mais uma sprint concluída
    $sprintConcluida++; 
    // gasta os dias da sprint
    $diasDisponiveis -= $duracaoSprint;
    // adiciona tarefas concluídas
    $tarefaConcluida += $medioSprint;

    // Evita ultrapassar o total de tarefas
    if ($tarefaConcluida > $totalTarefa) {
        $tarefaConcluida = $totalTarefa;
    }
}

$tarefaRestante = $totalTarefa - $tarefaConcluida;

echo "Numero de Sprint executada: $sprintConcluida <br>";
echo "Numero de Tarefa executada: $tarefaConcluida <br>";
echo "Numero de tarefas restantes após o periodo: $tarefaRestante";