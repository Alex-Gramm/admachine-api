<?php
/**
 * SspUserSyncUrlOptions
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
 * SspUserSyncUrlOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SspUserSyncUrlOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Ssp_user_sync_url_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_ttl_days' => 'int',
        'redirect_sync_to' => 'string',
        'sync_pixel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_ttl_days' => null,
        'redirect_sync_to' => null,
        'sync_pixel' => null
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
        'user_ttl_days' => 'user_ttl_days',
        'redirect_sync_to' => 'redirect_sync_to',
        'sync_pixel' => 'sync_pixel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_ttl_days' => 'setUserTtlDays',
        'redirect_sync_to' => 'setRedirectSyncTo',
        'sync_pixel' => 'setSyncPixel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_ttl_days' => 'getUserTtlDays',
        'redirect_sync_to' => 'getRedirectSyncTo',
        'sync_pixel' => 'getSyncPixel'
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
        $this->container['user_ttl_days'] = isset($data['user_ttl_days']) ? $data['user_ttl_days'] : null;
        $this->container['redirect_sync_to'] = isset($data['redirect_sync_to']) ? $data['redirect_sync_to'] : null;
        $this->container['sync_pixel'] = isset($data['sync_pixel']) ? $data['sync_pixel'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['user_ttl_days']) && ($this->container['user_ttl_days'] > 180)) {
            $invalidProperties[] = "invalid value for 'user_ttl_days', must be smaller than or equal to 180.";
        }

        if (!is_null($this->container['user_ttl_days']) && ($this->container['user_ttl_days'] < 7)) {
            $invalidProperties[] = "invalid value for 'user_ttl_days', must be bigger than or equal to 7.";
        }

        if (!is_null($this->container['redirect_sync_to']) && (mb_strlen($this->container['redirect_sync_to']) > 500)) {
            $invalidProperties[] = "invalid value for 'redirect_sync_to', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['sync_pixel']) && (mb_strlen($this->container['sync_pixel']) > 500)) {
            $invalidProperties[] = "invalid value for 'sync_pixel', the character length must be smaller than or equal to 500.";
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
     * Gets user_ttl_days
     *
     * @return int|null
     */
    public function getUserTtlDays()
    {
        return $this->container['user_ttl_days'];
    }

    /**
     * Sets user_ttl_days
     *
     * @param int|null $user_ttl_days Lifetime, days
     *
     * @return $this
     */
    public function setUserTtlDays($user_ttl_days)
    {

        if (!is_null($user_ttl_days) && ($user_ttl_days > 180)) {
            throw new \InvalidArgumentException('invalid value for $user_ttl_days when calling SspUserSyncUrlOptions., must be smaller than or equal to 180.');
        }

        $this->container['user_ttl_days'] = $user_ttl_days;

        return $this;
    }

    /**
     * Gets redirect_sync_to
     *
     * @return string|null
     */
    public function getRedirectSyncTo()
    {
        return $this->container['redirect_sync_to'];
    }

    /**
     * Sets redirect_sync_to
     *
     * @param string|null $redirect_sync_to Redirect sync to
     *
     * @return $this
     */
    public function setRedirectSyncTo($redirect_sync_to)
    {
        if (!is_null($redirect_sync_to) && (mb_strlen($redirect_sync_to) > 500)) {
            throw new \InvalidArgumentException('invalid length for $redirect_sync_to when calling SspUserSyncUrlOptions., must be smaller than or equal to 500.');
        }

        $this->container['redirect_sync_to'] = $redirect_sync_to;

        return $this;
    }

    /**
     * Gets sync_pixel
     *
     * @return string|null
     */
    public function getSyncPixel()
    {
        return $this->container['sync_pixel'];
    }

    /**
     * Sets sync_pixel
     *
     * @param string|null $sync_pixel Sync pixel
     *
     * @return $this
     */
    public function setSyncPixel($sync_pixel)
    {
        if (!is_null($sync_pixel) && (mb_strlen($sync_pixel) > 500)) {
            throw new \InvalidArgumentException('invalid length for $sync_pixel when calling SspUserSyncUrlOptions., must be smaller than or equal to 500.');
        }

        $this->container['sync_pixel'] = $sync_pixel;

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


