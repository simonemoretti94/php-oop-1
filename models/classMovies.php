<?php

/**
 * Class Movie
 *
 * This class represents a movie with various properties and methods.
 *
 * @property string $continent The continent where the movie is available.
 * @property array $genre The genres of the movie.
 * @property bool $adult Whether the movie is for adults.
 * @property string $original_language The original language of the movie.
 * @property string $original_title The original title of the movie.
 * @property float $vote_average The average vote of the movie.
 * @property int $min_age_allowed The minimum age allowed to watch the movie.
 */
class Movie
{
    public static string $madein = 'Continent: ';
    public static string $continent = 'Worldwide';

    public static function returnCountry()
    {
        return self::$continent;
    }
    public function __construct(
        public array $genre,
        public bool $adult,
        public string $original_language,
        public string $original_title,
        public float $vote_average,
        public int $min_age_allowed
    ) {
        $this->genre = $genre;
        $this->adult = $adult;
        $this->original_language = $original_language;
        $this->original_title = $original_title;
        $this->vote_average = $vote_average;
        $this->min_age_allowed = $min_age_allowed;
    }

    /**
     * Verifies the age of the user
     *
     * @param int $age The age of the user.
     * @return string Whether the user is allowed to watch the movie.
     */
    function ageVerifier($age)
    {
        if ($age >= 18) {
            return 'Allowed to watch the movie.';
        } else {
            return 'Not allowed to watch the movie.';
        }
    }

    /**
     * Rounds the vote average of the movie
     *
     * @return int The rounded vote average of the movie.
     */
    function voteRounded()
    {
        return round($this->vote_average, 0);
    }
}
