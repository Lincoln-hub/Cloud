<?php
namespace App\Services\Utility;

use Monolog\Logger;
use Monolog\Handler\LogglyHandler;
use Monolog\Handler\StreamHandler;

class MyLogger implements ILoggerService
{
    
    private static $logger =null;
   

    public static function getLogger()
    {
        if(self::$logger == null)
        {
            self::$logger = new Logger('playlaravel');
            self::$logger->pushHandler(new StreamHandler('php://stdout',Logger::DEBUG));
        }
        return self::$logger;
    }
    
    public static function debug($message, $data=array())
    {
        self::getLogger()->addDebug($message,$data);
    }

    public static function warning($message, $data=array())
    {
        self::getLogger()->addWarning($message,$data);
    }

    public static function error($message, $data=array())
    {
        self::getLogger()->addError($message,$data);
    }

    public static function info($message, $data=array())
    {
        self::getLogger()->addInfo($message,$data);
    }

    
}