<?php

namespace Shop\Services;

/**
 * Class Logger
 * @package Shop
 */
class Logger
{
    const LOG_PATH = DOCKROOT . '/var/log';

    /**
     * @param string $message
     */
    public static function logMessage($message)
    {
        $logger = new \Katzgrau\KLogger\Logger(self::LOG_PATH);
        $logger->info($message);
    }

    /**
     * @return \Katzgrau\KLogger\Logger
     */
    public static function getLogger()
    {
        return new \Katzgrau\KLogger\Logger(self::LOG_PATH);
    }
}
