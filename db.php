<?php
require_once __DIR__ . '/models/classMovies.php';
require_once __DIR__ . '/models/classGenre.php';




$first_genre = new MovieGenre('Action', 'Sci-Fi', 'Thriller');

$first_movie = new Movie($first_genre, true, 'en', 'Matrix reloaded', 6.75, 18);

$second_movie = new Movie($first_genre, false, 'ja', 'Psycho-pass', 8.23, 16);

$movies = [
    0 => $first_movie,
    1 => $second_movie,

];
