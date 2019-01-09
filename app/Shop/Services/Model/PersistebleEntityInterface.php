<?php

namespace Shop\Services\Model;

interface PersistebleEntityInterface
{
    /**
     * @return \Shop\Services\Persistence\Resource
     */
    public function getPersistence();
}