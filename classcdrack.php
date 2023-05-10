    <?php
    class CDRack extends Product
    {
        private $model;
    
        public function __construct($name, $price, $discount, $model)
        {
            parent::__construct($name, $price, $discount);
            $this->model = $model;
        }
    
        public function getModel()
        {
            return $this->model;
        }
    
        public function getTotalPrice()
        {
            return $this->getPrice();
        }
    
        public function getPrice()
        {
            return $this->price + ($this->price * 0.15); // Menambahkan 15% pada harga
        }
    
        public function hasDiscount()
        {
            return false; // CD Rack tidak mendapatkan diskon
        }
    }
    ?>