<?php

namespace Shop\Product;

class ExtendedProduct extends SimpleProduct
{
    /**
     * @var string
     */
    private $description;

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}