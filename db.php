<?php
require_once __DIR__ . '/models/classMovies.php';
require_once __DIR__ . '/models/classGenre.php';

$movies = [
    new Movie(new MovieGenre('Action', 'Sci-Fi', 'Thriller'), true, 'en', 'Matrix reloaded', 6.75, 18),
    new Movie(new MovieGenre('Sci-Fi', 'Thriller', 'Dystopic'), false, 'ja', 'Psycho-pass', 8.23, 16),
    new Movie(new MovieGenre('Fantasy', 'Youngs', 'Futuristic'), false, 'en', 'Megamind vs. the Doom Syndicate', 5.594, 16),
    new Movie(new MovieGenre('Action', 'Historical', 'Thriller'), true, 'en', 'The Accursed', 5.971, 18),
    new Movie(new MovieGenre('Action', 'Thriller', 'Horror'), true, 'en', 'The Masked Saint', 4.5, 18),
    new Movie(new MovieGenre('Action', 'Military', 'Drama'), true, 'hi', 'The Surgical Strike', 7.108, 16),
    new Movie(new MovieGenre('Action', 'Shounen', 'Superpowers'), false, 'ja', 'Demons Slayer', 2.846, 14),
    new Movie(new MovieGenre('Slice of life', 'Soap opera', 'Comic'), false, 'fr', 'The Calendrier', 6.556, 16),
];
