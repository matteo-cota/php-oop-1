<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genres = [];

    public function __construct($title, $director, $year, $genres = [])
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }

    public function getSummary()
    {
        $genres = implode(", ", $this->genres);
        return "{$this->title} ({$this->year}), directed by {$this->director}. Genres: {$genres}.";
    }
}