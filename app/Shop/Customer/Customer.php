<?php

namespace Shop\Customer;

class Customer extends \Shop\DataObject implements CustomerInterface
{
    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->data['name'] = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData('name');
    }
}