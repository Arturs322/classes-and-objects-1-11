<?php

class Survey {

    public int $surveyed = 12467;
    public float $week = 0.14;
    public float $citrus = 0.64;

    public function __construct(int $surveyed = 12467, float $week = 0.14, float $citrus = 0.64)
    {
        $this->surveyed = $surveyed;
        $this->week = $week;
        $this->citrus = $citrus;
    }

    public function getSurvey()
    {
        echo "Total number of people surveyed: {$this->surveyed}"  . PHP_EOL;

    }
    public function getWeekly()
    {
        $week = $this->surveyed * $this->week / 1000;
       $week = number_format($week, 3, ',', '.');
        echo "Approximately {$week} thousand of those bought at least one energy drink a week." . PHP_EOL;
    }
    public function getCitrus()
    {
        $flavor = $this->surveyed * $this->citrus / 1000;
       $flavor = number_format($flavor, 3, ',', '.');
        echo "Approximately {$flavor}  of those prefer citrus flavored energy drinks.";

    }
}

$x = new Survey();

echo $x->getSurvey() . PHP_EOL;
echo $x->getWeekly() . PHP_EOL;
echo $x->getCitrus() . PHP_EOL;
