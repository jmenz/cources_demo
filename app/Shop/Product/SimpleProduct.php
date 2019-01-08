<?php

namespace Shop\Product;

use Shop\Product\Persistence\Product as Persistence;

class SimpleProduct implements ProductInterface
{
    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var Persistence|null
     */
    private $persistence = null;

    /**
     * @return null|Persistence
     */
    public function getPersistence()
    {
        if ($this->persistence === null) {
            $this->persistence = new Persistence();
            $this->persistence->setModel($this);
        }

        return $this->persistence;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}