<?php


namespace Shop\Cart;

use Shop\Product\ProductInterface;

class Cart
{
    private $customer;

    private $cartItems = [];

    /**
     * Cart constructor.
     * @param \Shop\Customer\CustomerInterface $customer
     */
    public function __construct(\Shop\Customer\CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer(\Shop\Customer\CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->cartItems;
    }

    public function addProduct(ProductInterface $product, $qty = 1)
    {
        foreach ($this->cartItems as $cartItem) {
            if ($cartItem['product']->getId() == $product->getId()) {
                $cartItem['qty'] += $qty;
            }
        }

        $this->cartItems[] = [
            'product' => $product,
            'qty' => $qty,
        ];





    }



}