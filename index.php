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
    public function get_title()
    {
        return $this->title;
    }

    // Method to get the genre of the movie
    public function get_genre()
    {
        return $this->genre;
    }

    // Method to get the release year of the movie
    public function get_year()
    {
        return $this->year;
    }
}

// Creating Objects (Movie)
$movie1 = new Movie("John Wick: Chapter 4", "Action", 2023);
$movie2 = new Movie("Extraction 2", 'Action', 2023);

// Print Object Properties (Movie)
echo "Movie 1: ";
var_dump($movie1);

echo "Movie 2: ";
var_dump($movie2);
