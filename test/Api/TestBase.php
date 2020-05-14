<?php

namespace Aspose\ThreeD\Cloud;
require_once(__DIR__ . '/../../vendor/autoload.php');
use \Aspose\ThreeD\Cloud\Api\ThreeDCloudApi;
/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
 class TestBase
{
     public static $grantType = "client_credentials";
     public static $clientId = "****your AppID****";
     public static $clientSecret = "****your AppKey****";

     public static $localFolder = "\\testData\\";
     public static $storageTestFolder = "3DTestPHP";

    public static function getThreeDApi()
    {
        static $threeDApi = null;
        if($threeDApi === null){
            $threeDApi = new ThreeDCloudApi(self::$grantType,self::$clientId,self::$clientSecret);
        }
        return $threeDApi;
    }

    public static function PrintDebugInfo($message){
        echo $message;
        echo "\r\n";
    }

    public static function CheckFileExsits($filename){
        if($filename)
        {
            echo 'Successful!';
        }
        else
        {
            echo 'Failed!';
        }
    }
}