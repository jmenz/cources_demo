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
            $builder->addDefinitions(DOCKROOT . '/app/config.php');

            static::$instance = $builder->build();
        }

        return static::$instance;
    }
}