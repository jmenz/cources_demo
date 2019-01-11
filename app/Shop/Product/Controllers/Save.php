<?php

namespace Shop\Product\Controllers;

use Shop\Services\Persistence\CantSaveException;
use Shop\Services\ControllerInterface;
use Shop\Product\ExtendedProduct;

class Save implements ControllerInterface
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
            $this->product->setName($request->paramsPost()->name);
            $this->product->setBrand($request->paramsPost()->brand);
            $this->product->setPrice($request->paramsPost()->price);
            $this->product->getPersistence()->save();
            return $response->redirect("/product/" . $this->product->getId());
        } catch (CantSaveException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Sorry, the product can't be saved";
        } catch (\Shop\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}
