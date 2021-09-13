<?php
class Account{
    private string $name;
    private int $balance;

    public function __construct(string $name, int $balance)
    {
        $this->balance = $balance;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function getInfo()
    {
        return "{$this->name}, {$this->balance}$" . PHP_EOL;
    }
    public function withdrawal()
    {
        $withdrawal = (int) readline("Enter withdrawal: ");
        $this->balance -= $withdrawal;
    }
    public function deposit()
    {
        $deposit = (int) readline("Enter deposit: ");
        $this->balance += $deposit;
    }
    public function transfer(Account $from, Account $to, int $howMuch)
    {

    }

}
$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state: " . PHP_EOL;
echo PHP_EOL;
echo $bartos_account->getInfo() . PHP_EOL;
echo $bartos_swiss_account->getInfo() . PHP_EOL;


$bartos_account->withdrawal();

$bartos_swiss_account->deposit();


echo "Final state: " . PHP_EOL;
echo PHP_EOL;
echo $bartos_account->getInfo();
echo $bartos_swiss_account->getInfo();

$matts_account = new Account("Matt's account", 1000);
$my_account = new Account("My account", 0);
echo "-------------++++++++++++++++-------------" . PHP_EOL;
echo "Initial state: " . PHP_EOL;
echo PHP_EOL;
echo $matts_account->getInfo();
echo $my_account->getInfo();

$matts_account->withdrawal();;
$my_account->deposit();

echo "Final state: " . PHP_EOL;
echo PHP_EOL;
echo $matts_account->getInfo();
echo $my_account->getInfo();

echo "-------------++++++++++++++++-------------" . PHP_EOL;

$a = new Account("A", 1000);
$b = new Account("B", 1000);
$c = new Account("C", 1000);

echo $a->transfer($a,$b,100);
echo $a->getInfo();
echo $b->getInfo();
echo $c->getInfo();
