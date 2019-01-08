<?php

const DOCKROOT = __DIR__;

include_once __DIR__ . "/vendor/autoload.php";
echo "<pre>";
$db = new \Shop\Database();


$t_shirt = new Shop\Product\SimpleProduct();
$t_shirt->getPersistence()->load(1);
print_r($t_shirt);


//$t_shirt->setName('Sorochka');
//$t_shirt->setBrand('Armani');
//$t_shirt->setPrice(8999.99);
//
//echo "<pre>";
//
//print_r($t_shirt);
//
//
//$customer = new Shop\Customer\Customer();
//
//$customer->setName('Ivan');
//
//$customer->setData('surname', 'petrovich');
//
//print_r($customer->getSurname());
//
//echo '<br><br><br><br>';
//
////var_dump($customer->getName());
//
//$cart = new Shop\Cart\Cart($customer);
//
//$cart->addProduct($t_shirt, 2);
//$cart->addProduct($t_shirt, 3);
//
//
//print_r($cart);



















