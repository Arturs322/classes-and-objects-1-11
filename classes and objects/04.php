<?php

//The class Movie is started below. An instance of class Movie represents a film. This class has the following three class variables:
//
//title, which is a string representing the title of the movie IR
//studio, which is a string representing the studio that made the movie IR
//rating, which is a string representing the rating of the movie (i.e. PG13, R, etc) IR
//Write a constructor for the class Movie, which takes the title of the movie, studio, and rating as its arguments,
// and sets the respective class variables to these values. IR
//Write a method GetPG, which takes an array of base type Movie as its argument, IR
// and returns a new array of only those movies in the input array with a rating of "PG". You may assume the input array is full of Movie instances.
// The returned array may be empty. IR
//Write a piece of code that creates an instance of the class Movie:
//with the title “Casino Royale”, the studio “Eon Productions” and the rating “PG13”;
//with the title “Glass”, the studio “Buena Vista International” and the rating “PG13”;
//with the title “Spider-Man: Into the Spider-Verse”, the studio “Columbia Pictures” and the rating “PG”.

class Movie
{
    public string $title;
    public string $studio;
    public string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getPG(array $movies)
    {

        return "Movie title: {$this->title}, Studio: {$this->studio}, Rating: {$this->rating}" . PHP_EOL;


    }

    public function getAZ(array $moreMovies)
    {

        return "Movie title: {$this->title}, Studio: {$this->studio}, Rating: {$this->rating}" . PHP_EOL;


    }
}

$movies = [
    new Movie("Barons", "Hollywood", "PG13"),
    new Movie("Spider-Man", "Lionsgate", "PG"),
    new Movie("Lord of the Rings", "Amazon", "PG"),
    new Movie("Star Wars", "Motion Pictures", "G"),
    new Movie("Hobbit", "Amazon", "PG"),
];

foreach ($movies as $movie) {
    if ($movie->rating == "PG") {
        echo $movie->getPG($movies) . PHP_EOL;
    }
}

$moreMovies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Glass", "Buena Vista International", "PG13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
];

foreach ($moreMovies as $moreMovie) {
    if ($moreMovie->rating == "PG") {
        echo "------" . PHP_EOL;
        echo $moreMovie->getPG($moreMovies) . PHP_EOL;
    }
}
