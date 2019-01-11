<?php

namespace Shop\Services;

use orm\DataBase\AbstractDataBase;

/**
 * Class Database
 * @package Shop
 */
final class Database extends AbstractDataBase
{
    public $dbtype = "mysql";
    public $dbname = "elogic_cources_test";
    public $user = "root";
    public $password = "753dfx";
}
