<?php
require_once __DIR__ . '/classes/food.php';
require_once __DIR__ . '/classes/toy.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/RegistredUser.php';
require_once __DIR__ . '/classes/CreditCard.php';

$food = new food('Biscotti', 10.20, 'alta', 'cane', 'cibo', '10.02.19' );
$toy = new toy('Palone', 19.30, 'alta', 'cane', 'giocatolo', '30x30');

$postpay = new CreditCard('5478 0468 2956 2967', '22-05-2032', 'postpay', 'Andriy', 'Semenchenko', 906);
$bancomat = new CreditCard('8942 1678 1357 1809', '12-02-2024', 'bancomat', 'Carlotta', 'Di Carlo', 246);


$user = new user('Andriy', 'Semenchenko', 'and.semech@gmail.com');
$RegistredUser = new RegistredUser('Carlotta', 'Di Carlo', 'carlottadicarlo@gmail.com');

var_dump($food, $toy, $user, $RegistredUser, $postpay, $bancomat);

$user->setCreditCard($postpay);
$RegistredUser->setCreditCard($bancomat);

var_dump($user, $RegistredUser)

?>