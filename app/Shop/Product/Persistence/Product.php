<?php

namespace Shop\Product\Persistence;

use orm\DataBase\Table;
use orm\DataBase\Field;

class Product extends Table
{
    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var \Shop\Product\ProductInterface
     */
    private $model;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->table_name = "product";
        $this->id = Field::primaryKey();
        $this->name = Field::varchar(255);
        $this->brand = Field::varchar(255);
        $this->price = Field::number('float');
        $this->initTable();
    }

    /**
     * @param \Shop\Product\ProductInterface $model
     */
    public function setModel(\Shop\Product\ProductInterface $model)
    {
        $this->model = $model;
    }

    /**
     * @throws \orm\Exceptions\QueryGenerationException
     */
    public function save()
    {
        $this->id = $this->model->getId();
        $this->name = $this->model->getName();
        $this->brand = $this->model->getBrand();
        $this->price = $this->model->getPrice();
        parent::save();
    }

    public function load($id)
    {
        $data = self::find(['id'=> $id]);
        if (count($data)) {
            $data = $data[0];
            $this->model->setId($data->id);
            $this->model->setName($data->name);
            $this->model->setBrand($data->brand);
            $this->model->setPrice($data->price);
        }
    }
}
