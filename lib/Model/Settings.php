<?php
/**
 * Settings
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
 * Settings Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Settings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'organization_id' => 'int',
        'general' => '\OpenAPI\Client\Model\SettingsGeneral',
        'users' => '\OpenAPI\Client\Model\SettingsUsers',
        'integrations' => '\OpenAPI\Client\Model\SettingsIntegrations',
        'channels' => '\OpenAPI\Client\Model\SettingsUserChannels'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'organization_id' => null,
        'general' => null,
        'users' => null,
        'integrations' => null,
        'channels' => null
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
        'organization_id' => 'organization_id',
        'general' => 'general',
        'users' => 'users',
        'integrations' => 'integrations',
        'channels' => 'channels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_id' => 'setOrganizationId',
        'general' => 'setGeneral',
        'users' => 'setUsers',
        'integrations' => 'setIntegrations',
        'channels' => 'setChannels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_id' => 'getOrganizationId',
        'general' => 'getGeneral',
        'users' => 'getUsers',
        'integrations' => 'getIntegrations',
        'channels' => 'getChannels'
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
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['general'] = isset($data['general']) ? $data['general'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['integrations'] = isset($data['integrations']) ? $data['integrations'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets organization_id
     *
     * @return int|null
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param int|null $organization_id Organization ID
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets general
     *
     * @return \OpenAPI\Client\Model\SettingsGeneral|null
     */
    public function getGeneral()
    {
        return $this->container['general'];
    }

    /**
     * Sets general
     *
     * @param \OpenAPI\Client\Model\SettingsGeneral|null $general general
     *
     * @return $this
     */
    public function setGeneral($general)
    {
        $this->container['general'] = $general;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \OpenAPI\Client\Model\SettingsUsers|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \OpenAPI\Client\Model\SettingsUsers|null $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets integrations
     *
     * @return \OpenAPI\Client\Model\SettingsIntegrations|null
     */
    public function getIntegrations()
    {
        return $this->container['integrations'];
    }

    /**
     * Sets integrations
     *
     * @param \OpenAPI\Client\Model\SettingsIntegrations|null $integrations integrations
     *
     * @return $this
     */
    public function setIntegrations($integrations)
    {
        $this->container['integrations'] = $integrations;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return \OpenAPI\Client\Model\SettingsUserChannels|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param \OpenAPI\Client\Model\SettingsUserChannels|null $channels channels
     *
     * @return $this
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

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


