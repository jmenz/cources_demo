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
     * @return mixed|\Shop\Services\Persistence\Resource|string
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     * @throws \Exception
     */
    public function getPersistence()
    {
        if ($this->persistence === null) {
            $this->persistence = \Shop\Services\DiContainer::getInstance()
                ->get($this->persistenceClass);
            $this->persistence->setModel($this);
            $this->persistence->initTable();
        }

        return $this->persistence;
    }
}