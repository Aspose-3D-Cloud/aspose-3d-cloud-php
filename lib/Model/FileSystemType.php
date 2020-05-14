<?php
/**
 * FileSystemType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Aspose.ThreeD Cloud API Reference
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Aspose\ThreeD\Cloud\Model;
use \Aspose\ThreeD\Cloud\ObjectSerializer;

/**
 * FileSystemType Class Doc Comment
 *
 * @category Class
 * @description File system type
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileSystemType
{
    /**
     * Possible values of this enum
     */
    const MemoryFileSystem = 0;
    const DummyFileSystem = 1;
    const LocalFileSystem = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MemoryFileSystem,
            self::DummyFileSystem,
            self::LocalFileSystem,
        ];
    }
}

