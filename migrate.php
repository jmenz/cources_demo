<?php

const DOCKROOT = __DIR__;

include_once __DIR__ . "/vendor/autoload.php";

$db = new \Shop\Database();

$product = new \Shop\Product\ExtendedProduct();

$product->getPersistence()->migrate();

//$customer = new \Shop\Customer\Customer();
//
//$customer->getPersistence()->migrate();