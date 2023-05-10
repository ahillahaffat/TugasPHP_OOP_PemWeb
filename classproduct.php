<?php

// Class Product
class Product
{
    protected $name;
    protected $price;
    protected $discount;

    public function __construct($name, $price, $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price + ($this->price * 0.10); // Menambahkan 10% pada harga
    }

    public function getDiscount()
    {
        return $this->discount + 0.05; // Menambahkan 5% pada diskon
    }

    public function getFormattedPrice()
    {
        return 'Rp ' . number_format($this->getPrice(), 0, ',', '.');
    }

    public function hasDiscount()
    {
        return $this->discount > 0;
    }
}

?>