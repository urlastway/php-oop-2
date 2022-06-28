<?php 

require_once __DIR__ . '/products/toy.php';
require_once __DIR__ . '/products/food.php';

$products = [
    new product('Dolce Vita', 10, 'super', 'cane'),
    new product('Impermeabile Pocket Fuss', 15, 'not bad', 'cane'),
];

var_dump($products);

?>