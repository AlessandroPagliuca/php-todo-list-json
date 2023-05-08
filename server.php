<?php 

// Leggi la lista di attività dal file JSON
$tasks = json_decode(file_get_contents('tasks.json'), true);

// Aggiungi il nuovo task alla lista
$newTask = array(
    'task' => $_POST['task'],
    'completed' => false
  );
  
array_push($tasks, $newTask);

// Salva la lista di attività aggiornata nel file JSON
file_put_contents('tasks.json', json_encode($tasks));

// Ritorna il nuovo task come risposta alla richiesta POST
header('Content-Type: application/json');
echo json_encode($newTask);