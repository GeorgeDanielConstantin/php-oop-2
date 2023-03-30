<?php

require_once __DIR__ . "/product.php";

class bed extends product {
    public $material;

    public function __construct(string $name, float $price, Category $category, string $material)
    {
        parent::__construct($name, $price, $category);

        $this->$material = $material;
    }
}

?>
