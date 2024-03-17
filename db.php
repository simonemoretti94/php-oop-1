<?php
require_once __DIR__ . '/models/classMovies.php';
//require_once __DIR__ . '/models/classGenre.php';

$movies = [
    new Movie(['Action', 'Sci-Fi', 'Thriller', 'Shounen', 'Superpowers', 'Soap opera', 'Comic', 'Shounen', 'Superpowers'], true, 'en', 'Matrix reloaded', 6.75, 18),
    new Movie(['Sci-Fi', 'Thriller', 'Dystopic', 'Fantasy', 'Youngs'], false, 'ja', 'Psycho-pass', 8.23, 16),
    new Movie(['Fantasy', 'Youngs', 'Futuristic', 'Historical', 'Thriller'], false, 'en', 'Megamind vs. the Doom Syndicate', 5.594, 16),
    new Movie(['Action', 'Historical', 'Thriller', 'Slice of life', 'Soap opera'], true, 'en', 'The Accursed', 5.971, 18),
    new Movie(['Action', 'Thriller', 'Horror', 'Thriller', 'Slice of life'], true, 'en', 'The Masked Saint', 4.5, 18),
    new Movie(['Action', 'Military', 'Drama', 'Dystopic', 'Fantasy'], true, 'hi', 'The Surgical Strike', 7.108, 16),
    new Movie(['Action', 'Shounen', 'Superpowers', 'Military', 'Drama'], false, 'ja', 'Demons Slayer', 2.846, 14),
    new Movie(['Slice of life', 'Soap opera', 'Comic', 'Shounen', 'Superpowers'], false, 'fr', 'The Calendrier', 6.556, 16),
];
