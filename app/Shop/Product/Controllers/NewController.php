<?php

namespace Shop\Product\Controllers;

use Shop\Services\ControllerInterface;
use Shop\Product\ExtendedProduct;

class NewController implements ControllerInterface
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
            $html = <<<TEXT

<form action='/product/save' method='post'>
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br>
    <label for="price">Price:</label>
    <input type="text" name="price">
    <br>
    <label for="brand">Brand:</label>
    <input type="text" name="brand">
    <br>
    <button type="submit">Save</button>
</form>
TEXT;
            
            return $html;

        } catch (\Shop\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}
