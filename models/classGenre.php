<?php
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

/*
class MovieGenre
{
    public $genres;

    function __construct()
    {
        $this->genres = func_get_args();
    }
}
*/