<?php
class Movie
{
    // Instance variables
    public $title;
    public $genre;
    public $year;

    // Construct
    public function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }
}
