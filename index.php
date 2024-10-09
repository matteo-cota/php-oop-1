<?php
require_once __DIR__ . '/classes/Movie.php';

$movie1 = new Movie("Inception", "Christopher Nolan", 2010);
$movie2 = new Movie("La vita è bella", "Roberto Benigni", 1997);

echo "<h1>Movie List</h1>";

echo "<h2>{$movie1->title}</h2>";
echo "<p>" . $movie1->getSummary() . "</p>";

echo "<h2>{$movie2->title}</h2>";
echo "<p>" . $movie2->getSummary() . "</p>";