<?php
require 'models/movie.php';
// Controlla se sono stati inviati dati tramite il metodo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera i dati del form
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $language = $_POST['language'];
    $duration = $_POST['duration'];
    $img_url = $_POST['img_url'];

    // Crea un nuovo oggetto $new_movie utilizzando i dati forniti
    $new_movie = new Movie($title, $language, $duration, $img_url, $genre);

    
    $file = 'data/movies.json';
    $jsonData = file_get_contents($file);  

    $moviesData = json_decode($jsonData, true);

    $moviesData[] = $new_movie;
    $jsonData = json_encode($moviesData);
    file_put_contents($file, $jsonData);

    // Reindirizza l'utente a una pagina di conferma o a un'altra destinazione
    header('Location: index.php');
    exit();
}
?>
