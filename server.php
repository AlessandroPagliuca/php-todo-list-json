<?php 

// Leggi la lista di attività dal file JSON
$file_json = file_get_contents('tasks.json');
$tasks = json_decode($file_json, true);

// Aggiungi il nuovo task alla lista
$newTask = array(
    'task' => $_POST['task'],
    'completed' => false
  );
  
array_push($tasks, $newTask);

// Salva la lista di attività aggiornata nel file JSON
$json_string = json_encode($tasks);

file_put_contents('tasks.json', $json_string );

// Ritorna il nuovo task come risposta alla richiesta POST
echo json_encode($tasks);