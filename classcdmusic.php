<?php
  class CDMusic extends Product
  {
      private $capacity;
      private $model;
  
      public function __construct($name, $price, $discount, $capacity, $model)
      {
          parent::__construct($name, $price, $discount);
          $this->capacity = $capacity;
          $this->model = $model;
      }
  
      public function getCapacity()
      {
          return $this->capacity;
      }
  
      public function getModel()
      {
          return $this->model;
      }
  
      public function calculatePrice()
      {
          $price = $this->getPrice();
          $price += $price * 0.1; // Tambahkan 10% pada harga
  
          return $price;
      }
  
      public function calculateDiscount()
      {
          $discount = $this->getDiscount();
          $discount += 0.05; // Tambahkan 5% pada diskon
  
          return $discount;
      }
  
      public function calculateTotalPrice()
      {
          $price = $this->calculatePrice();
          $discount = $this->calculateDiscount();
          $totalPrice = $price - ($price * $discount);
  
          return $totalPrice;
      }
  }
  
  ?>
  
  