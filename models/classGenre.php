<?php
class MovieGenre
{
    public $genre1;
    public $genre2;
    public $genre3;

    function __construct($genre1, $genre2, $genre3)
    {
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