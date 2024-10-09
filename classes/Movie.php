<?php
class Movie
{
    public $title;
    public $director;
    public $year;

    public function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function getSummary()
    {
        return "{$this->title} ({$this->year}), directed by {$this->director}.";
    }
}