<?php

namespace Shop\Services;

class Router
{

    /**
     * @var array
     */
    public $routes = [
        [
            'method' => "GET",
            'path' => "/migrate/",
            'className' => "\Shop\Services\Database\MigrateController"
        ],
        [
            'method' => "GET",
            'path' => "/product/[:id]",
            'className' => "\Shop\Product\Controller"
        ],
        [
            'method' => "GET",
            'path' => "/customer/[:id]",
            'className' => "\Shop\Customer\Controller"
        ]
    ];

    /**
     * Routing entry point
     */
    public function dispatch()
    {
        $klein = new \Klein\Klein();

        foreach ($this->routes as $route) {
            $klein->respond(
                $route['method'],
                $route['path'],
                function ($request, $response) use ($route) {
                    /** @var ControllerInterface $controller */
                    $controller = new $route['className']();
                    if ($controller instanceof ControllerInterface) {
                        return $controller->execute($request, $response);
                    } else {
                        throw new SystemException('Controller Class not found');
                    }
                });
        }

        $klein->dispatch();
    }
}
