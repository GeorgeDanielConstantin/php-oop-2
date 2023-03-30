<?php

require_once __DIR__ . "/product.php";

class food extends product {
    public $weight;
    public $unit;
    public $type;


    public function __construct(string $name, float $price, Category $category, float $weight, string $unit, string $type)
    {
        parent::__construct($name, $price, $category);

        $this->$weight = $weight;
        $this->$unit = $unit;
        $this->$type = $type;


    }
}

?>
