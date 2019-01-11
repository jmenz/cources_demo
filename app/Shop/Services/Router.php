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
            'path' => "/product/[i:id]",
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
    ];

    /**
     *
     * Routing entry point
     * @throws \Exception
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
                    $controller = DiContainer::getInstance()->get($route['className']);
                    if ($controller instanceof ControllerInterface) {
                        return $controller->execute($request, $response);
                    } else {
                        throw new SystemException('Controller Class not found');
                    }
                });
        }

        $klein->dispatch();
    }

    /**
     * @return \DI\Container
     * @throws \Exception
     */
    private function getDiContainer()
    {
        return DiContainer::getInstance();
    }

}
