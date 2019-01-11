<?php

namespace Shop\Product;

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
        $product = new ExtendedProduct();
        try {
            $product->getPersistence()->load($request->id);
            return print_r($product, true);
        } catch (NotFoundException $e) {
            return "Sorry, the product not found";
        } catch (\Shop\Services\SystemException $e) {

            \Shop\Services\Logger::getLogger()->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}
