<?php

/**
 * Class MovieGenre
 *
 * This class represents a movie genre with various properties.
 *
 * @property string $madein The continent where the movie is made.
 * @property string $genre1 The first genre of the movie.
 * @property string $genre2 The second genre of the movie.
 * @property string $genre3 The third genre of the movie.
 */
class MovieGenre
{
    public static string $madein = 'Continent: ';

    function __construct(
        public string $genre1,
        public string $genre2,
        public string $genre3
    ) {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
        $this->genre3 = $genre3;
    }
}
