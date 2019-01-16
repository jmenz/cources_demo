<?php

return [
    "log.errorFile" => DOCKROOT . '/var/log',

    "database" => [
        "dbtype" => "mysql",
        "dbname" => "elogic_cources_test",
        "user" => "root",
        "password" => "753dfx",
    ],


    \Katzgrau\KLogger\Logger::class => DI\create()
        ->constructor(DI\get('log.errorFile')),


    Shop\Services\Database::class => DI\create()
        ->constructor(DI\get('database')),

    "Shop\Customer\CustomerInterface" => DI\create('Shop\Customer\Customer'),
];