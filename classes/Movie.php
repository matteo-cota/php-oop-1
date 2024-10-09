<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genres = [];
    public $cover;

    public function __construct($title, $director, $year, $genres = [], $cover = '')
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
        $this->cover = $cover;
    }

    public function getSummary()
    {
        $genres = implode(", ", $this->genres);
        return "Diretto da <strong>{$this->director}</strong>. Rilasciato: <strong>{$this->year}</strong>. Genere: <strong>{$genres}</strong>.";
    }
}