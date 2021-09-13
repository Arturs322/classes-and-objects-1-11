<?php

class Points {
    public int $firstPoint;
    public int $secondPoint;

    public function __construct(int $firstPoint, int $secondPoint)
    {
        $this->firstPoint = $firstPoint;
        $this->secondPoint = $secondPoint;

    }
    public function getNormal()
    {
       return " {$this->firstPoint} {$this->secondPoint}". PHP_EOL;
    }
    public function getSwapped()
    {
        return " ({$this->firstPoint}, {$this->secondPoint})". PHP_EOL;
    }
}



$points = [
    new Points(-3, 6),
    new Points(5, 2),
];
foreach ($points as $point) {
  //  echo $points[1]->getSwapped();
}
foreach ($points as $point) {
    echo $point->getSwapped();
}

//echo " . {$points[0]}. x . ", " . {$points[0]}.y . ";
//echo " . {$points[1]}.x . ", " . {$points[1]}.y . ";