<?php


return [
    'routers' => [
        [
            'method' => "GET",
            'path' => "/migrate/",
            'className' => "\Shop\Services\Database\MigrateController"
        ],
        [
            'method' => "GET",
            'path' => "/product/view/[i:id]",
            'className' => "\Shop\Product\Controllers\View"
        ],
        [
            'method' => "GET",
            'path' => "/product/new",
            'className' => "\Shop\Product\Controllers\NewController"
        ],
        [
            'method' => "POST",
            'path' => "/product/save",
            'className' => "\Shop\Product\Controllers\Save"
        ],
        [
            'method' => "GET",
            'path' => "/customer/[:id]",
            'className' => "\Shop\Customer\Controller"
        ]
    ],

    \Shop\Services\Router::class => DI\create()
        ->constructor(DI\get('routers'))
];