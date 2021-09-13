<?php

class BankAccount
{
    public string $name;
    public float $balance;

    public function __construct(string $name, float $balance)
    {

        $this->name = $name;
        $this->balance = $balance;
    }

    function show_user_name_and_balance()
    {

       $total = number_format($this->balance, 2, '.', '');
       if ($total > 0)
       {
           return "{$this->name}, {$total}$" . PHP_EOL;
       } else
       {
           return $this->name . "," . " " . abs($total) . "$" . PHP_EOL;
       }
    }

}

$ben = new BankAccount("Ben", 17.25);
echo $ben->show_user_name_and_balance() . PHP_EOL;

$ben = new BankAccount("Benz", -250);
echo $ben->show_user_name_and_balance() . PHP_EOL;

$ben = new BankAccount("Benzins", -1337);
echo $ben->show_user_name_and_balance() . PHP_EOL;

$ben = new BankAccount("Benson", 17.50);
echo $ben->show_user_name_and_balance() . PHP_EOL;