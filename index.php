<?php
require_once __DIR__ . '/classes/food.php';
require_once __DIR__ . '/classes/toy.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/RegistredUser.php';

$food = new food('Biscotti', 10.20, 'alta', 'cane', 'cibo', '10.02.19' );
$toy = new toy('Palone', 19.30, 'alta', 'cane', 'giocatolo', '30x30');


$user = new user('Andriy', 'Semenchenko', 'and.semech@gmail.com');
$RegistredUser = new RegistredUser('Carlotta', 'Di Carlo', 'carlottadicarlo@gmail.com');

var_dump($food, $toy, $user, $RegistredUser);

?>