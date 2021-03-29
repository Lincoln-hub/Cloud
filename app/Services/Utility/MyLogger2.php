<?php
namespace App\Services\Utility;

use Monolog\Logger;
use Monolog\Handler\LogglyHandler;
use Monolog\Handler\StreamHandler;

class MyLogger2 implements ILoggerService
{
    
    private static $logger;
   

    public static function getLogger()
    {
        if(self::$logger == null)
        {
            self::$logger = new Logger('logger');
            self::$logger->pushHandler(new StreamHandler(_DIR_ .'log\app.log',Logger::DEBUG));
        }
        return self::$logger;
    }
    
    public static function debug($message, $data=array())
    {}

    public static function warning($message, $data=array())
    {}

    public static function error($message, $data=array())
    {}

    public static function info($message, $data=array())
    {
        self::getLogger()->addInfo($message,$data);
    }

    
}