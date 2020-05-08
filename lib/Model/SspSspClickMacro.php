<?php
/**
 * SspSspClickMacro
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API PLATFORM.IO
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SspSspClickMacro Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SspSspClickMacro implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Ssp_ssp_click_macro';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unencoded' => 'string',
        'encoded' => 'string',
        'double_encoded' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'unencoded' => null,
        'encoded' => null,
        'double_encoded' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'unencoded' => 'unencoded',
        'encoded' => 'encoded',
        'double_encoded' => 'double_encoded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unencoded' => 'setUnencoded',
        'encoded' => 'setEncoded',
        'double_encoded' => 'setDoubleEncoded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unencoded' => 'getUnencoded',
        'encoded' => 'getEncoded',
        'double_encoded' => 'getDoubleEncoded'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['unencoded'] = isset($data['unencoded']) ? $data['unencoded'] : null;
        $this->container['encoded'] = isset($data['encoded']) ? $data['encoded'] : null;
        $this->container['double_encoded'] = isset($data['double_encoded']) ? $data['double_encoded'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['unencoded']) && (mb_strlen($this->container['unencoded']) > 500)) {
            $invalidProperties[] = "invalid value for 'unencoded', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['encoded']) && (mb_strlen($this->container['encoded']) > 500)) {
            $invalidProperties[] = "invalid value for 'encoded', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['double_encoded']) && (mb_strlen($this->container['double_encoded']) > 500)) {
            $invalidProperties[] = "invalid value for 'double_encoded', the character length must be smaller than or equal to 500.";
        }

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets unencoded
     *
     * @return string|null
     */
    public function getUnencoded()
    {
        return $this->container['unencoded'];
    }

    /**
     * Sets unencoded
     *
     * @param string|null $unencoded CT unencoded
     *
     * @return $this
     */
    public function setUnencoded($unencoded)
    {
        if (!is_null($unencoded) && (mb_strlen($unencoded) > 500)) {
            throw new \InvalidArgumentException('invalid length for $unencoded when calling SspSspClickMacro., must be smaller than or equal to 500.');
        }

        $this->container['unencoded'] = $unencoded;

        return $this;
    }

    /**
     * Gets encoded
     *
     * @return string|null
     */
    public function getEncoded()
    {
        return $this->container['encoded'];
    }

    /**
     * Sets encoded
     *
     * @param string|null $encoded CT encoded
     *
     * @return $this
     */
    public function setEncoded($encoded)
    {
        if (!is_null($encoded) && (mb_strlen($encoded) > 500)) {
            throw new \InvalidArgumentException('invalid length for $encoded when calling SspSspClickMacro., must be smaller than or equal to 500.');
        }

        $this->container['encoded'] = $encoded;

        return $this;
    }

    /**
     * Gets double_encoded
     *
     * @return string|null
     */
    public function getDoubleEncoded()
    {
        return $this->container['double_encoded'];
    }

    /**
     * Sets double_encoded
     *
     * @param string|null $double_encoded CT double encoded
     *
     * @return $this
     */
    public function setDoubleEncoded($double_encoded)
    {
        if (!is_null($double_encoded) && (mb_strlen($double_encoded) > 500)) {
            throw new \InvalidArgumentException('invalid length for $double_encoded when calling SspSspClickMacro., must be smaller than or equal to 500.');
        }

        $this->container['double_encoded'] = $double_encoded;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

