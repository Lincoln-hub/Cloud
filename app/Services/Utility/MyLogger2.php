<?php
namespace App\Services\Utility;

use Monolog\Logger;
use Monolog\Handler\LogglyHandler;


class MyLogger2 implements ILoggerService
{
    
    private static $logger = null;
   

    static function getLogger()
    {
        if(self::$logger == null)
        {
            self::$logger = new Logger('playlaravel');
            self::$logger->pushHandler(new LogglyHandler('73284c7f-1d2d-4dd3-a485-8820ba9d3300/tag/cst323_logfile_heroku_upload',Logger::DEBUG));
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