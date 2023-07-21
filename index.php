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

    // Method to get the title of the movie
    public function getTitle()
    {
        return $this->title;
    }

    // Method to get the genre of the movie
    public function getGenre()
    {
        return $this->genre;
    }

    // Method to get the release year of the movie
    public function getYear()
    {
        return $this->year;
    }
}
