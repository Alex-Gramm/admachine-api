<?php
/**
 * Pixel
 *
 * PHP version 7.1
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
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * Pixel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Pixel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pixel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'name' => 'string',
        'active' => 'float',
        'user_id' => 'float',
        'default_ext' => 'float',
        'ext_segment_id' => 'string',
        'user_ttl_days' => 'float',
        'type' => 'float',
        'default_conversion_value' => 'float',
        'username' => 'string',
        'is_shared' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'active' => null,
        'user_id' => null,
        'default_ext' => null,
        'ext_segment_id' => null,
        'user_ttl_days' => null,
        'type' => null,
        'default_conversion_value' => null,
        'username' => null,
        'is_shared' => null
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
        'id' => 'id',
        'name' => 'name',
        'active' => 'active',
        'user_id' => 'user_id',
        'default_ext' => 'default_ext',
        'ext_segment_id' => 'ext_segment_id',
        'user_ttl_days' => 'user_ttl_days',
        'type' => 'type',
        'default_conversion_value' => 'default_conversion_value',
        'username' => 'username',
        'is_shared' => 'is_shared'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'active' => 'setActive',
        'user_id' => 'setUserId',
        'default_ext' => 'setDefaultExt',
        'ext_segment_id' => 'setExtSegmentId',
        'user_ttl_days' => 'setUserTtlDays',
        'type' => 'setType',
        'default_conversion_value' => 'setDefaultConversionValue',
        'username' => 'setUsername',
        'is_shared' => 'setIsShared'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'active' => 'getActive',
        'user_id' => 'getUserId',
        'default_ext' => 'getDefaultExt',
        'ext_segment_id' => 'getExtSegmentId',
        'user_ttl_days' => 'getUserTtlDays',
        'type' => 'getType',
        'default_conversion_value' => 'getDefaultConversionValue',
        'username' => 'getUsername',
        'is_shared' => 'getIsShared'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['default_ext'] = isset($data['default_ext']) ? $data['default_ext'] : null;
        $this->container['ext_segment_id'] = isset($data['ext_segment_id']) ? $data['ext_segment_id'] : null;
        $this->container['user_ttl_days'] = isset($data['user_ttl_days']) ? $data['user_ttl_days'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['default_conversion_value'] = isset($data['default_conversion_value']) ? $data['default_conversion_value'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['is_shared'] = isset($data['is_shared']) ? $data['is_shared'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['user_ttl_days']) && ($this->container['user_ttl_days'] > 3.6E+2)) {
            $invalidProperties[] = "invalid value for 'user_ttl_days', must be smaller than or equal to 3.6E+2.";
        }

        if (!is_null($this->container['user_ttl_days']) && ($this->container['user_ttl_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'user_ttl_days', must be bigger than or equal to 1.";
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
     * Gets id
     *
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id Id Pixel
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name Pixel.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return float|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param float|null $active Status. 1 - Active, 0 - Pause. One of the ID values of parameter `statuses` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return float|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param float|null $user_id User ID.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets default_ext
     *
     * @return float|null
     */
    public function getDefaultExt()
    {
        return $this->container['default_ext'];
    }

    /**
     * Sets default_ext
     *
     * @param float|null $default_ext External Segment ID. Use in `Data` type (type = 0).
     *
     * @return $this
     */
    public function setDefaultExt($default_ext)
    {
        $this->container['default_ext'] = $default_ext;

        return $this;
    }

    /**
     * Gets ext_segment_id
     *
     * @return string|null
     */
    public function getExtSegmentId()
    {
        return $this->container['ext_segment_id'];
    }

    /**
     * Sets ext_segment_id
     *
     * @param string|null $ext_segment_id External Segment ID. Use if default_ext = 0.
     *
     * @return $this
     */
    public function setExtSegmentId($ext_segment_id)
    {
        $this->container['ext_segment_id'] = $ext_segment_id;

        return $this;
    }

    /**
     * Gets user_ttl_days
     *
     * @return float|null
     */
    public function getUserTtlDays()
    {
        return $this->container['user_ttl_days'];
    }

    /**
     * Sets user_ttl_days
     *
     * @param float|null $user_ttl_days Lifetime, days
     *
     * @return $this
     */
    public function setUserTtlDays($user_ttl_days)
    {

        if (!is_null($user_ttl_days) && ($user_ttl_days > 3.6E+2)) {
            throw new \InvalidArgumentException('invalid value for $user_ttl_days when calling Pixel., must be smaller than or equal to 3.6E+2.');
        }

        $this->container['user_ttl_days'] = $user_ttl_days;

        return $this;
    }

    /**
     * Gets type
     *
     * @return float|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param float|null $type Type Pixel. Required. One of the ID values of parameter `pixel_type` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets default_conversion_value
     *
     * @return float|null
     */
    public function getDefaultConversionValue()
    {
        return $this->container['default_conversion_value'];
    }

    /**
     * Sets default_conversion_value
     *
     * @param float|null $default_conversion_value Default conversion value. Use in `Event` type (type = 1).
     *
     * @return $this
     */
    public function setDefaultConversionValue($default_conversion_value)
    {
        $this->container['default_conversion_value'] = $default_conversion_value;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username Username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets is_shared
     *
     * @return float|null
     */
    public function getIsShared()
    {
        return $this->container['is_shared'];
    }

    /**
     * Sets is_shared
     *
     * @param float|null $is_shared Is Shared. Only Root, only Data Pixel.
     *
     * @return $this
     */
    public function setIsShared($is_shared)
    {
        $this->container['is_shared'] = $is_shared;

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


