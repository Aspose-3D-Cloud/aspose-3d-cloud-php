<?php
/**
 * PdfSaveOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Aspose.3D Cloud API Reference
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Aspose\ThreeD\Cloud\Model;
use \Aspose\ThreeD\Cloud\ObjectSerializer;

/**
 * PdfSaveOption Class Doc Comment
 *
 * @category Class
 * @package  Aspose\ThreeD\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PdfSaveOption extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PdfSaveOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'flip_coordinate_system' => 'bool',
        'render_mode' => '\Aspose\ThreeD\Cloud\Model\PdfRenderMode',
        'lighting_scheme' => '\Aspose\ThreeD\Cloud\Model\PdfLightingScheme'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'flip_coordinate_system' => null,
        'render_mode' => null,
        'lighting_scheme' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'flip_coordinate_system' => 'FlipCoordinateSystem',
        'render_mode' => 'RenderMode',
        'lighting_scheme' => 'LightingScheme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flip_coordinate_system' => 'setFlipCoordinateSystem',
        'render_mode' => 'setRenderMode',
        'lighting_scheme' => 'setLightingScheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flip_coordinate_system' => 'getFlipCoordinateSystem',
        'render_mode' => 'getRenderMode',
        'lighting_scheme' => 'getLightingScheme'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['flip_coordinate_system'] = isset($data['flip_coordinate_system']) ? $data['flip_coordinate_system'] : null;
        $this->container['render_mode'] = isset($data['render_mode']) ? $data['render_mode'] : null;
        $this->container['lighting_scheme'] = isset($data['lighting_scheme']) ? $data['lighting_scheme'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets flip_coordinate_system
     *
     * @return bool
     */
    public function getFlipCoordinateSystem()
    {
        return $this->container['flip_coordinate_system'];
    }

    /**
     * Sets flip_coordinate_system
     *
     * @param bool $flip_coordinate_system Gets or sets to flip the coordinate system of the scene during exporting.
     *
     * @return $this
     */
    public function setFlipCoordinateSystem($flip_coordinate_system)
    {
        $this->container['flip_coordinate_system'] = $flip_coordinate_system;

        return $this;
    }

    /**
     * Gets render_mode
     *
     * @return \Aspose\ThreeD\Cloud\Model\PdfRenderMode
     */
    public function getRenderMode()
    {
        return $this->container['render_mode'];
    }

    /**
     * Sets render_mode
     *
     * @param \Aspose\ThreeD\Cloud\Model\PdfRenderMode $render_mode Render mode specifies the style in which the 3D artwork is rendered.
     *
     * @return $this
     */
    public function setRenderMode($render_mode)
    {
        $this->container['render_mode'] = $render_mode;

        return $this;
    }

    /**
     * Gets lighting_scheme
     *
     * @return \Aspose\ThreeD\Cloud\Model\PdfLightingScheme
     */
    public function getLightingScheme()
    {
        return $this->container['lighting_scheme'];
    }

    /**
     * Sets lighting_scheme
     *
     * @param \Aspose\ThreeD\Cloud\Model\PdfLightingScheme $lighting_scheme LightingScheme specifies the lighting to apply to 3D artwork.
     *
     * @return $this
     */
    public function setLightingScheme($lighting_scheme)
    {
        $this->container['lighting_scheme'] = $lighting_scheme;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


