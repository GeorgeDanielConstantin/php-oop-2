<?php

require_once __DIR__ . "/category.php";

class Product {
 public $name;
 public $price;
 protected $category;

 public function __construct(string $name, float $price, Category $category)
 {
    $this->setName($name);
    $this->setPrice($price);
    $this->setCategory($category);
} 

public function setName($name) {
    if(!is_string($name) || $name === "") return false;
    $this->name = $name;
    return $this;
}

public function getName() {
    return $this->name;
}

public function setprice($price) {
    if(!is_float($price) || $price === "") return false;
    $this->price = $price;
    return $this;
}

public function getprice() {
    return $this->price;
}

public function setCategory($category) {
    if(($category instanceof Category) || $category === "") return false;
    $this->category = $category;
    return $this;
}

public function getCategory() {
    return $this->category;
}
    
}