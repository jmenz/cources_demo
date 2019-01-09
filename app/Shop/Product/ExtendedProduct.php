<?php

namespace Shop\Product;

class ExtendedProduct extends SimpleProduct
{
    /**
     * @field
     * @var string
     * @size 512
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