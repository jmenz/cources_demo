<?php

namespace Shop\Product;

use Shop\Services\Model\AbstractModel;

class SimpleProduct extends AbstractModel implements ProductInterface
{
    /**
     * @var string
     */
    protected $persistenceClass = "Shop\Product\Persistence\Product";

    /**
     * @field
     * @var float
     */
    protected $price;

    /**
     * @field
     * @var string
     */
    protected $name;

    /**
     * @field
     * @var string
     * @size 128
     */
    protected $brand;

    /**
     * @field
     * @primary
     * @var integer
     */
    protected $id;

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