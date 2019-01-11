<?php

namespace Shop;

class App
{
    public static function run()
    {
        try {
            $db = new Services\Database();

            $router = new Services\Router();
            $router->dispatch();
        } catch (Services\SystemException $e) {
            Services\Logger::getLogger()
                ->log(\Psr\Log\LogLevel::ERROR, $e->getMessage(), $e->getTrace());
            echo "Oops... Something Went Wrong";
        } catch (\Exception $e) {
            Services\Logger::getLogger()
                ->log(\Psr\Log\LogLevel::ERROR, $e->getMessage(), $e->getTrace());
            echo "Oops... Something Went Wrong";
        }
    }
}