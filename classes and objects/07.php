<?php
//The questions in this exercise all deal with a class Dog that you have to program from scratch.
//
//Create a class Dog. Dogs should have a name, and a sex.
//Make a class DogTest with a Main method in which you create the following Dogs:
//Max, male
//Rocky, male
//Sparky, male
//Buster, male
//Sam, male
//Lady, female
//Molly, female
//Coco, female
//Change the Dog class so that each dog has a mother and a father.
//Add to the main method in DogTest, so that:
//Max has Lady as mother, and Rocky as father
//Coco has Molly as mother, and Buster as father
//Rocky has Molly as mother, and Sam as father
//Buster has Lady as mother, and Sparky as father
//Change the dog class to include a method fathersName that return the name of the father.
// If the father reference is null, return "Unknown". Test in the DogTest main method that it works.
//referenceToCoco.FathersName() returns the string "Buster"
//referenceToSparky.FathersName() returns the string "Unknown"
//Change the dog class to include a method boolean HasSameMotherAs(Dog otherDog).
// The method should return true on the call
//referenceToCoco.HasSameMotherAs(referenceToRocky). Show that the new method works in the DogTest main method.

class Dog {
    public string $name;
    public string $sex;
    public string $fathersName;
    public string $mothersName;

    public function __construct(string $name, string $sex, string $fathersName, string $mothersName)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->fathersName = $fathersName;
        $this->mothersName = $mothersName;
    }
    public function DogTest()
    {
        if ($this->fathersName != "")
        {
           // echo "{$this->name} has {$this->mothersName} as mother, and {$this->fathersName} as father" . PHP_EOL;
            echo "{$this->name} has ";
        } else
        {
            echo "{$this->name}, {$this->sex}" . PHP_EOL;

        }
    }
    public function fathersName()
    {
        if ($this->fathersName == "")
        {
            return "Unknown!" . PHP_EOL;
        } else
        {
            return "{$this->fathersName} as father and {$this->mothersName} as mother" . PHP_EOL;
        }
    }
    public function HasSameMotherAs(): bool
    {
        if ($this->mothersName == "")
        {
            return false;
        }else
        {
return true;
        }
    }
}

$dogs = [
    new Dog("Max", "male", "Rocky", "Lady"),
    new Dog("Rocky", "male", "Buster", "Molly"),
    new Dog("Sparky", "male", "", ""),
    new Dog("Buster", "male", "Sparky", "Lady"),
    new Dog("Sam", "male", "",""),
    new Dog("Lady", "female","",""),
    new Dog("Molly", "female","",""),
    new Dog("Coco", "female", "Buster", "Molly"),
];

foreach ($dogs as $dog) {
    var_dump($dog->HasSameMotherAs());
    echo $dog->DogTest(),$dog->fathersName(),$dog->HasSameMotherAs();
}