<?php

namespace Shop\Services;

class DiContainer extends Singleton
{
    /**
     * @return \DI\Container
     * @throws \Exception
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            $builder = new \DI\ContainerBuilder();
            $builder->useAutowiring(true);
            $builder->addDefinitions(DOCKROOT . '/app/Shop/Services/Di/Config.php');

            static::$instance = $builder->build();
        }

        return static::$instance;
    }
}