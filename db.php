<?php
require_once __DIR__ . '/models/classMovies.php';
require_once __DIR__ . '/models/classGenre.php';



//genres
//$first_genre = new MovieGenre('Action', 'Sci-Fi', 'Thriller');
$first_genre = new MovieGenre('Action', 'Sci-Fi', 'Thriller');

//movies
$first_movie = new Movie(new MovieGenre('Action', 'Sci-Fi', 'Thriller'), true, 'en', 'Matrix reloaded', 6.75, 18);
$second_movie = new Movie(new MovieGenre('Sci-Fi', 'Thriller', 'Dystopic'), false, 'ja', 'Psycho-pass', 8.23, 16);
$third_movie = new Movie(new MovieGenre('Fantasy', 'Youngs', 'Futuristic'), false, 'en', 'Megamind vs. the Doom Syndicate', 5.594, 16);
$fourth_movie = new Movie(new MovieGenre('Action', 'Historical', 'Thriller'), true, 'en', 'The Accursed', 5.971, 18);
$fifth_movie = new Movie(new MovieGenre('Action', 'Thriller', 'Horror'), true, 'en', 'The Masked Saint', 4.5, 18);
$sixth_movie = new Movie(new MovieGenre('Action', 'Military', 'Drama'), true, 'hi', 'The Surgical Strike', 7.108, 16);
$seventh_movie = new Movie(new MovieGenre('Action', 'Shounen', 'Superpowers'), false, 'ja', 'Demons Slayer', 2.846, 14);
$eighth_movie = new Movie(new MovieGenre('Slice of life', 'Soap opera', 'Comic'), false, 'fr', 'The Calendrier', 6.556, 16);

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
