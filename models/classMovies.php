<?php

class Movie
{
    public $genre = [];
    public $adult;
    public $original_language;
    public $original_title;
    public $vote_average;

    public $min_age_allowed;

    public function __construct($genre, $adult, $original_language, $original_title, $vote_average, $min_age_allowed)
    {
        foreach ($genre as $key => $element) {
            $this->genre[$key] = $element;
        };


        $this->genre = $genre;
        $this->adult = $adult;
        $this->original_language = $original_language;
        $this->original_title = $original_title;
        $this->vote_average = $vote_average;
        $this->min_age_allowed = $min_age_allowed;
    }

    /**
     * @param int user age
     * @return string if user is allowed to watch the movie
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
     * @return int rounded number to zero decimals
     */
    function voteRounded()
    {
        return round($this->vote_average, 0);
    }
}
