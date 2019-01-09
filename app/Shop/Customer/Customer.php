<?php

namespace Shop\Customer;

use Shop\Services\Model\AbstractModel;

class Customer extends AbstractModel implements CustomerInterface
{
    /**
     * @var string
     */
    protected $persistenceClass = "Shop\Customer\Persistence\Customer";

    /**
     * @var string
     * @field
     * @size 512
     */
    private $name;

    /**
     * @var integer
     * @field
     * @primary
     */
    private $id;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}