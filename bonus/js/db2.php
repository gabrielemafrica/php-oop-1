<?php
require '../db.php';

// Converti l'array $moviesProva in formato JSON
$jsonData = json_encode($moviesProva);

// Imposta l'header Content-Type per indicare che la risposta è in formato JSON
header('Content-Type: application/json');

// Restituisci i dati JSON
echo $jsonData;
?>