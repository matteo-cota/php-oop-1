<?php
require_once __DIR__ . '/classes/Movie.php';

$movie1 = new Movie("Inception", "Christopher Nolan", 2010, ["Azione", "Sci-Fi"]);
$movie2 = new Movie("La vita è bella", "Roberto Benigni", 1997, ["Comedia", "Drammatico"]);
$movie3 = new Movie("The Matrix", "The Wachowskis", 1999, ["Azione", "Sci-Fi"]);
$movie4 = new Movie("Il postino", "Michael Radford", 1994, ["Drammatico", "Romance"]);
$movie5 = new Movie("Nuovo Cinema Paradiso", "Giuseppe Tornatore", 1988, ["Drammatico", "Romance"]);
$movie6 = new Movie("La dolce vita", "Federico Fellini", 1960, ["Drammatico"]);
$movie7 = new Movie("La grande bellezza", "Paolo Sorrentino", 2013, ["Drammatico"]);
$movie8 = new Movie("I soliti ignoti", "Mario Monicelli", 1958, ["Commedia", "Crime"]);
$movie9 = new Movie("Il buono, il brutto, il cattivo", "Sergio Leone", 1966, ["Western"]);
$movie10 = new Movie("Mediterraneo", "Gabriele Salvatores", 1991, ["Commedia", "War"]);

echo "<h1>Movie List</h1>";

echo "<h2>{$movie1->title}</h2>";
echo "<p>" . $movie1->getSummary() . "</p>";

echo "<h2>{$movie2->title}</h2>";
echo "<p>" . $movie2->getSummary() . "</p>";

echo "<h2>{$movie3->title}</h2>";
echo "<p>" . $movie3->getSummary() . "</p>";

echo "<h2>{$movie4->title}</h2>";
echo "<p>" . $movie4->getSummary() . "</p>";

echo "<h2>{$movie5->title}</h2>";
echo "<p>" . $movie5->getSummary() . "</p>";

echo "<h2>{$movie6->title}</h2>";
echo "<p>" . $movie6->getSummary() . "</p>";

echo "<h2>{$movie7->title}</h2>";
echo "<p>" . $movie7->getSummary() . "</p>";

echo "<h2>{$movie8->title}</h2>";
echo "<p>" . $movie8->getSummary() . "</p>";

echo "<h2>{$movie9->title}</h2>";
echo "<p>" . $movie9->getSummary() . "</p>";

echo "<h2>{$movie10->title}</h2>";
echo "<p>" . $movie10->getSummary() . "</p>";