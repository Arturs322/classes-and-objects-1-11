<?php
//The FuelGauge Class: This class will simulate a fuel gauge. Its responsibilities are as follows:
//
//To know the car’s current amount of fuel, in liters. IR
//To report the car’s current amount of fuel, in liters. IR
//To be able to increment the amount of fuel by 1 liter. This simulates putting fuel in the car. ( The car can hold a maximum of 70 liters.) IR
//To be able to decrement the amount of fuel by 1 liter, if the amount of fuel is greater than 0 liters. This simulates burning fuel as the car runs. IR


//The Odometer Class: This class will simulate the car’s odometer. Its responsibilities are as follows:
//To know the car’s current mileage. IR
//To report the car’s current mileage. IR
//To be able to increment the current mileage by 1 kilometer. The maximum mileage the odometer can store is 999,999 kilometer. IR
// When this amount is exceeded, the odometer resets the current mileage to 0.
//To be able to work with a FuelGauge object. It should decrease the FuelGauge object’s current amount of fuel by 1 liter for every 10 kilometers traveled.
// (The car’s fuel economy is 10 kilometers per liter.)
//Demonstrate the classes by creating instances of each.
// Simulate filling the car up with fuel, and then run a loop that increments the odometer until the car runs out of fuel.
// During each loop iteration, print the car’s current mileage and amount of fuel.
class FuelGauge{

    public int $fuel = 0;
    public int $capacity;
    public function __construct(int $fuel = 0, int $capacity = 70)
    {
        $this->fuel = $fuel;
        $this->capacity = $capacity;
    }
    public function getFuel()
    {
        echo "Current amount of fuel: {$this->fuel}l.". PHP_EOL;
    }
    public function decrementFuel()
    {
      if ($this->fuel > 0)
      {
          $this->fuel--;
      }
      if ($this->fuel == 0)
      {
          echo "Enabling fuel tank reserve!" . PHP_EOL;
      }

usleep(50000);
    }
    public function incrementFuel()
    {
        if ($this->fuel < 70)
        {
            $this->fuel++;
            echo "Refueling: {$this->fuel}l" . PHP_EOL;

        } elseif ($this->fuel > $this->capacity)
        {
            echo "TOO MUCH FUEL!" . PHP_EOL;
        }
        usleep(50000);
    }

}


class odometer {
    public int $mileage = 0;

    public function __construct(int $mileage = 0)
    {
        $this->mileage = $mileage;
    }
    public function getMileage()
    {
        echo "Current mileage: {$this->mileage}km" . PHP_EOL;
    }
    public function incrementMileage()
    {
        if ($this->mileage < 999)
        {
            $this->mileage++;
            echo "Mileage: {$this->mileage}km" . PHP_EOL;

        } elseif ($this->mileage > 999)
        {
            $this->mileage = 0;
            echo "00000" . PHP_EOL;
        }
        usleep(50000);
    }
    public function decrementMileage()
    {
        if ($this->mileage > 0)
        {
            $this->mileage--;
        }
        if ($this->mileage == 0)
        {
            echo "YOU ARE OUT OF GAS BOY!" . PHP_EOL;
            exit;
        }
    }

}

$maxMileage = 999;
echo readline("Refuel!") . PHP_EOL;
$fuelGauge = new FuelGauge();
echo $fuelGauge->getFuel();

$odometer = new Odometer();
echo $odometer->getMileage();


for ($i = 0; $i <= 70; $i++)
{
    echo $fuelGauge->incrementFuel();
}
for ($i = 0; $i <= 100; $i++)
{
    echo $odometer->incrementMileage();
}
echo "Current amount of fuel: {$fuelGauge->fuel} litres." . PHP_EOL;
echo "Current mileage: {$odometer->mileage} km." . PHP_EOL;


echo readline("Drive!") . PHP_EOL;

for ($i = 1; $i <= 70; $i--)
{
    echo "Current amount of fuel: {$fuelGauge->fuel} litres." . PHP_EOL;
    echo $fuelGauge->decrementFuel();
    echo "Current mileage: {$odometer->mileage} km." . PHP_EOL;
    echo $odometer->decrementMileage();
}

