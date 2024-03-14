<?php
require_once __DIR__ . '/models/classMovies.php';
require_once __DIR__ . '/models/classGenre.php';



//genres
//$first_genre = new MovieGenre('Action', 'Sci-Fi', 'Thriller');
$first_genre = new MovieGenre('Action', 'Sci-Fi', 'Thriller');

//movies
$first_movie = new Movie($first_genre, true, 'en', 'Matrix reloaded', 6.75, 18);
$second_movie = new Movie($first_genre, false, 'ja', 'Psycho-pass', 8.23, 16);
$third_movie = new Movie($first_genre, false, 'en', 'Megamind vs. the Doom Syndicate', 5.594, 16);
$fourth_movie = new Movie($first_genre, true, 'en', 'The Accursed', 5.971, 18);
$fifth_movie = new Movie($first_genre, true, 'en', 'The Masked Saint', 4.5, 18);
$sixth_movie = new Movie($first_genre, true, 'hi', 'The Surgical Strike', 7.108, 16);
$seventh_movie = new Movie($first_genre, false, 'ja', 'Demons Slayer', 2.846, 14);
$eighth_movie = new Movie($first_genre, false, 'fr', 'The Calendrier', 6.556, 16);

$movies = [
    0 => $first_movie,
    1 => $second_movie,
    2 => $third_movie,
    3 => $fourth_movie,
    4 => $fifth_movie,
    5 => $sixth_movie,
    6 => $seventh_movie,
    7 => $eighth_movie,

];
