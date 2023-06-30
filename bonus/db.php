<?php
require 'models/movie.php';

//create new movies

$new_movie1 = new Movie("Star Wars", "English", "1080", "https://mashtrelo.com/wp-content/uploads/2017/11/star-wars-posters-from-around-the-world.jpg", "Action", "Adventure");

$new_movie2 = new Movie("Iron Man", "English", "1080", "https://www.usatoday.com/gcdn/media/USATODAY/USATODAY/2013/04/30/ansin-standard-3_4.jpg", "Action", "Heroes");


$moviesProva = [$new_movie1, $new_movie2];


?>