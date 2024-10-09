<?php
require_once __DIR__ . '/../data/db.php';

foreach ($movies as $movie) {
    echo "<div class='movie'>";
    echo "<img src='{$movie->cover}' alt='Cover of {$movie->title}' class='cover-image'>";
    echo "<div>";
    echo "<h2>{$movie->title}</h2>";
    echo "<p>" . $movie->getSummary() . "</p>";
    echo "</div>";
    echo "</div>";
}