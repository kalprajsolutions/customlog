<?php namespace Kalprajsolutions\CustomLog;

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Class Log
 * @package Fryiee\CustomLog
 */
class Log
{
    /**
     * Send an info message to a named log.
     *
     * @param $name
     * @param $message
     * @return bool
     */
    public static function info($name, $message)
    {
        return self::setup($name)->info($message);
    }

    /**
     * Send an error message to a named log.
     *
     * @param $name
     * @param $message
     * @return bool
     */
    public static function error($name, $message)
    {
        return self::setup($name)->error($message);
    }

    /**
     * Send a warning message to a named log.
     *
     * @param $name
     * @param $message
     * @return bool
     */
    public static function warning($name, $message)
    {
        return self::setup($name)->warning($message);
    }

    /**
     * Send a debug message to a named log.
     *
     * @param $name
     * @param $message
     * @return bool
     */
    public static function debug($name, $message)
    {
        return self::setup($name)->debug($message);
    }

    /**
     * Send a notice message to a named log.
     *
     * @param $name
     * @param $message
     * @return bool
     */
    public static function notice($name, $message)
    {
        return self::setup($name)->notice($message);
    }

    /**
     * Send a critical message to a named log.
     *
     * @param $name
     * @param $message
     * @return bool
     */
    public static function critical($name, $message)
    {
        return self::setup($name)->critical($message);
    }

    /**
     * Send an alert message to a named log.
     *
     * @param $name
     * @param $message
     * @return bool
     */
    public static function alert($name, $message)
    {
        return self::setup($name)->alert($message);
    }

    /**
     * Send an emergency message to a named log.
     *
     * @param $name
     * @param $message
     * @return bool
     */
    public static function emergency($name, $message)
    {
        return self::setup($name)->emergency($message);
    }

    /**
     * Set up the custom logger with a custom stream handler and formatter.
     *
     * @param $name
     * @return Logger
     */
    private static function setup($name)
    {
        $path = self::getPath($name);

        $log = new Logger($name);
        $streamHandler = new StreamHandler($path);
        $formatter = new LineFormatter(null, null, false, true);

        $streamHandler->setFormatter($formatter);
        $log->pushHandler($streamHandler);

        return $log;
    }

    /**
     * @param $name
     * @return string
     */
    private static function getPath($name)
    {
        if (boolval(getenv('LOG_DATE')) !== false) {
            return storage_path('logs/users/' . $name . '/' .date('Y-m-d'). '.log');
        }

        return storage_path('logs/users/' . $name . '/' .date('Y-m-d'). 'laravel.log');
    }
}
