<?php

class SavingsAccount
{
    public int $balance;

    public function __construct(int $balance)
    {
        $this->balance = $balance;
    }

    public function getWithDraw(): int
    {
        $withdraw = (int)readline("Enter amount withdrawn for each month: ") . PHP_EOL;
        echo PHP_EOL;
        return $this->balance -= $withdraw;
    }

    public function getDeposit(): int
    {
        $deposit = (int)readline("Enter amount deposited for each month: ") . PHP_EOL;
        return $this->balance += $deposit;

    }

    public function getInterest(): float
    {
        $rate = (int)readline("Enter the annual interest rate!: ") . PHP_EOL;
        $annual = $rate / 12 * $this->balance;
        return $this->balance += $annual;

    }
}

$x = (int)readline("How much money is in the account?: ") . PHP_EOL;
$x = new SavingsAccount($x);

echo $x->getInterest() . PHP_EOL;

$months = (int)readline("How long has the account been opened?: ") . PHP_EOL;
$sum = 0;
for ($i = 0; $i < $months; $i++) {
    echo $x->getDeposit(), $x->getWithDraw() . PHP_EOL;

}







