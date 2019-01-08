<?php

namespace Shop\Customer;

interface CustomerInterface
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
}
