<?php
namespace Shop;

use orm\DataBase\Table;
use orm\DataBase\Field;

class TestDb extends Table
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $surname;

    /**
     * TestDb constructor.
     */
    public function __construct()
    {
        $this->table_name = "table_name";
        $this->id = Field::primaryKey();
        $this->name = Field::varchar(255);
        $this->surname = Field::varchar(255);
        $this->initTable();
    }
}
