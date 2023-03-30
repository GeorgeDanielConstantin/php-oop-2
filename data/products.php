<?php

require_once __DIR__ . "/../models/category.php";
// require_once __DIR__ . "/../models/product.php";
require_once __DIR__ . "/../models/food.php";
require_once __DIR__ . "/../models/toy.php";
require_once __DIR__ . "/../models/bed.php";


$products = [
    new bed("Cotton Bed", 60.00, new category("Gatto"), "cotone"),
    new food("Cibo cani", 30.00, new category("Cane"), 5.00, "Kg", "Secco"),
    new toy("Paperella", 20.00, new category("Cane"), "plastica"),

];


?>