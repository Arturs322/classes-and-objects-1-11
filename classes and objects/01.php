<?php

class Product
{
    public string $name;
    public float $startPrice;
    public int $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct()
    {
       echo "{$this->name}, {$this->startPrice} EUR, {$this->amount} units" . PHP_EOL;

    }
    public function setStartPrice(float $startPrice)
    {
        $this->startPrice = $startPrice;
    }
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }
    public function setDiscount(int $percent)
    {
        $this->setStartPrice($this->startPrice * 0.7);
    }
}

$x = new Product("Banana", 1.1, 13);

echo $x->printProduct() . PHP_EOL;

$products =[
    new Product("Logitech mouse",70.00,14 ),
    new Product( "iPhone 5s",999.99,3 ),
    new Product( "Epson EB-U05",440.46,1),
    new Product( "Arturs EB-U05",440.46,20),

];

foreach ($products as $product) {
    echo $product->setDiscount(10);
}
foreach ($products as $product) {
    echo $products[3]->setStartPrice(1000) . PHP_EOL;
    echo $products[1]->setAmount(20) . PHP_EOL;
    echo $product->printProduct() . PHP_EOL;
}
