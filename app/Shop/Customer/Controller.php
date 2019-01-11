<?php

namespace Shop\Customer;

use Shop\Services\Persistence\NotFoundException;
use Shop\Services\ControllerInterface;

class Controller implements ControllerInterface
{
    /**
     * @param $request
     * @param $response
     * @return mixed|string
     * @throws \Exception
     */
    public function execute($request, $response)
    {
        $customer = new Customer();
        try {
            $customer->getPersistence()->load($request->id);
            return print_r($customer, true);
        } catch (NotFoundException $e) {
            return "Sorry, the customer not found";
        }
    }
}
