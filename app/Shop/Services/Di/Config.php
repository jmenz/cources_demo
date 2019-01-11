<?php
use Psr\Container\ContainerInterface;

return [
    "log.errorFile" => DOCKROOT . '/var/log',

    \Katzgrau\KLogger\Logger::class => DI\factory(function (ContainerInterface $c) {
        return new \Katzgrau\KLogger\Logger($c->get('log.errorFile'));
    }),
];