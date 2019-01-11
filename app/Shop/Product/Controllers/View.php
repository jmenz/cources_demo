<?php

namespace Shop\Product\Controllers;

use Shop\Services\Persistence\NotFoundException;
use Shop\Services\ControllerInterface;
use Shop\Product\ExtendedProduct;

class View implements ControllerInterface
{

    /**
     * @var ExtendedProduct
     */
    private $product;

    /**
     * @var \Katzgrau\KLogger\Logger
     */
    private $logger;

    /**
     * View constructor.
     * @param ExtendedProduct $product
     * @param \Katzgrau\KLogger\Logger $logger
     */
    public function __construct(
        ExtendedProduct $product,
        \Katzgrau\KLogger\Logger $logger
    )
    {
        $this->product = $product;
        $this->logger = $logger;
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
            $this->product->getPersistence()->load($request->id);
            return print_r($this->product, true);
        } catch (NotFoundException $e) {
            return "Sorry, the product not found";
        } catch (\Shop\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}
