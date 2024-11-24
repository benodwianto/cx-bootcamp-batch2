<!-- Encapsulation, Polymorphism, dan Trait dalam Satu Proyek
Studi Kasus: Sistem Manajemen Produk -->

<?php

trait Logger
{
    public function log($message)
    {
        echo "Log: $message\n";
    }
}

abstract class Product
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function getPrice();

    public function getName()
    {
        return $this->name;
    }
}

class PhysicalProduct extends Product
{
    private $price;

    public function __construct($name, $price)
    {
        parent::__construct($name);
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class DigitalProduct extends Product
{
    private $price;

    public function __construct($name, $price)
    {
        parent::__construct($name);
        $this->price = $price * 0.8; // Diskon untuk produk digital.
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class ProductManager
{
    use Logger;

    public function displayProduct(Product $product)
    {
        $this->log("Displaying product: " . $product->getName());
        echo "Product: " . $product->getName() . "\n";
        echo "Price: " . $product->getPrice() . "\n";
    }
}

// Menggunakan sistem:
$physical = new PhysicalProduct("Laptop", 1000);
$digital = new DigitalProduct("E-Book", 500);


$manager = new ProductManager();
$manager->displayProduct($physical);
echo "<br>";
$manager->displayProduct($digital);
