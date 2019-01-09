<?php

namespace Shop\Customer\Persistence;

use Shop\Services\Persistence\Resource;

class Customer extends Resource
{
    /**
     * @var string
     */
    protected $table_name = "customer";
}