<?php

//Create a class called Date that includes: IR
// three pieces of information as instance variables — a month, a day and a year. IR
//Your class should have a constructor that initializes IR
// the three instance variables and assumes that the values provided are correct. IR
// Provide a set and a get for each instance variable. IR
//Provide a method DisplayDate that displays the month, day and year separated by forward slashes /. IR
//Write a test application named DateTest that demonstrates class Date capabilities.
class Date {
    public int $month;
    public int $day;
    public int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getDay()
    {
         echo $this->day;
    }
    public function setDay(int $day)
    {
         $this->day = $day;
    }
    public function getMonth()
    {
        echo $this->month;
    }
    public function setMonth(int $month)
    {
         $this->month = $month;
    }
    public function getYear()
    {
        echo $this->year;
    }
    public function setYear(int $year)
    {
         $this->year = $year;
    }
    public function DisplayDate()
    {
        echo "{$this->month}/{$this->day}/{$this->year}" . PHP_EOL;
    }
}

$dates = [
    new Date(10, 20, 2020),
    new Date(7, 5, 2002),
    new Date(12, 1, 1999),
];

foreach ($dates as $date) {
    $date->DisplayDate() . PHP_EOL;
    $dates[0]->setMonth(4);
    $dates[1]->setDay(30);
    $dates[2]->setYear(2228);

}

