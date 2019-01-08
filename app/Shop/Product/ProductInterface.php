<?php
namespace Shop\Product;

interface ProductInterface
{
    /**
     * @param string $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param float $price
     * @return mixed
     */
    public function setPrice($price);

    /**
     * @return float
     */
    public function getPrice();
}