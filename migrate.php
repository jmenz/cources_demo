<?php

const DOCKROOT = __DIR__;

include_once __DIR__ . "/vendor/autoload.php";

$db = new \Shop\Database();

$productPersistence = new \Shop\Product\Persistence\Product();

$productPersistence->migrate();