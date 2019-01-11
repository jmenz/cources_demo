<?php

namespace Shop\Customer;

use Shop\Services\Persistence\NotFoundException;
use Shop\Services\ControllerInterface;

class Controller implements ControllerInterface
{

    private $customer;

    /**
     * Controller constructor.
     * @param CustomerInterface $customer
     */
    public function __construct(
        CustomerInterface $customer
    )
    {
        $this->customer = $customer;
    }

    /**
     * @param $request
     * @param $response
     * @return mixed|string
     * @throws \Exception
     */
    public function execute($request, $response)
    {
        try {
            $this->customer->getPersistence()->load($request->id);
            return print_r($this->customer, true);
        } catch (NotFoundException $e) {
            return "Sorry, the customer not found";
        }
    }
}
