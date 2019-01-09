<?php

namespace Shop\Services\Model;

abstract class AbstractModel implements PersistebleEntityInterface
{
    /**
     * @var string
     */
    protected $persistenceClass;

    /**
     * @var \Shop\Services\Persistence\Resource
     */
    protected $persistence = null;

    /**
     * @return null|\Shop\Services\Persistence\Resource
     */
    public function getPersistence()
    {
        if ($this->persistence === null) {
            $this->persistence = new $this->persistenceClass();
            $this->persistence->setModel($this);
            $this->persistence->initTable();
        }

        return $this->persistence;
    }
}